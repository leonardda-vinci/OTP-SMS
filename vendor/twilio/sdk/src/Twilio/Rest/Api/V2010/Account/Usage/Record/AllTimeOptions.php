<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V2\Service\User;

use Twilio\Options;
use Twilio\Values;

abstract class UserChannelOptions {
    /**
     * @param string $notificationLevel The notification_level
     * @param int $lastConsumedMessageIndex The last_consumed_message_index
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     * @return UpdateUserChannelOptions Options builder
     */
    public static function update(string $notificationLevel = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE): UpdateUserChannelOptions {
        return new UpdateUserChannelOptions($notificationLevel, $lastConsumedMessageIndex, $lastConsumptionTimestamp);
    }
}

class UpdateUserChannelOptions extends Options {
    /**
     * @param string $notificationLevel The notification_level
     * @param int $lastConsumedMessageIndex The last_consumed_message_index
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     */
    public function __construct(string $notificationLevel = Values::NONE, int $lastConsumedMessageIndex = Values::NONE, \DateTime $lastConsumptionTimestamp = Values::NONE) {
        $this->options['notificationLevel'] = $notificationLevel;
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
    }

    /**
     * The notification_level
     *
     * @param string $notificationLevel The notification_level
     * @return $this Fluent Builder
     */
    public function setNotificationLevel(string $notificationLevel): self {
        $this->options['notificationLevel'] = $notificationLevel;
        return $this;
    }

    /**
     * The last_consumed_message_index
     *
     * @param int $lastConsumedMessageIndex The last_consumed_message_index
     * @return $this Fluent Builder
     */
    public function setLastConsumedMessageIndex(int $lastConsumedMessageIndex): self {
        $this->options['lastConsumedMessageIndex'] = $lastConsumedMessageIndex;
        return $this;
    }

    /**
     * The last_consumption_timestamp
     *
     * @param \DateTime $lastConsumptionTimestamp The last_consumption_timestamp
     * @return $this Fluent Builder
     */
    public function setLastConsumptionTimestamp(\DateTime $lastConsumptionTimestamp): self {
        $this->options['lastConsumptionTimestamp'] = $lastConsumptionTimestamp;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.IpMessaging.V2.UpdateUserChannelOptions ' . $options . ']';
    }
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V2\Service\User;

use Twilio\Http\Response;
use Twilio\Page;
use Twilio\Version;

class UserBindingPage extends Page {
    /**
     * @param Version $version Version that contains the resource
     * @param Response $response Response from the API
     * @param array $solution The context solution
     */
    public function __construct(Version $version, Response $response, array $solution) {
        parent::__construct($version, $response);

        // Path Sol