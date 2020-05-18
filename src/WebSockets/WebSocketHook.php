<?php

namespace BeyondCode\LaravelWebSockets\WebSockets;

use BeyondCode\LaravelWebSockets\Apps\App;
use Ratchet\ConnectionInterface;

interface WebSocketHook
{
    public static function connection(App $app, ConnectionInterface $connection);

    public static function disconnection(App $app, ConnectionInterface $connection);

    public static function subscribedChannel(App $app, ConnectionInterface $connection, string $channelName);

    public static function occupiedChannel(App $app, ConnectionInterface $connection, string $channelName);

    public static function vacatedChannel(App $app, ConnectionInterface $connection, string $channelName);

    public static function clientMessage(App $app, ConnectionInterface $connection, \stdClass $payload);

    public static function apiMessage($appId, string $channel, string $event, string $payload);
}
