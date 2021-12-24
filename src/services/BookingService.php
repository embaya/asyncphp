<?php
declare(strict_types=1);

namespace Embaya\Services;

use Embaya\Models\Booking;
use Embaya\Models\Provider;
use Embaya\Models\Ticket;
use Embaya\Infrastructure\ProvidersRepository;

class BookingService
{
    public static function createBooking(): Booking
    {
        $booking = new Booking();
        $ticket = new Ticket();
        /** @var Provider $provider */
        foreach (ProvidersRepository::getArray() as $provider) {
            $provider->register($ticket);
            $booking->addProvider($provider);
        }
        $booking->setTicket($ticket);
        $booking->save();

        return $booking;
    }

    public static function createBookingCmd(): void
    {
        $timeMarker = microtime(true);

        echo json_encode([
            'booking' => self::createBooking()->getInfo(),
            'execution_time' => round(microtime(true) - $timeMarker, 3),
        ], JSON_PRETTY_PRINT);
    }
}
