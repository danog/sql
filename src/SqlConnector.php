<?php declare(strict_types=1);

namespace Amp\Sql;

use Amp\Cancellation;

/**
 * @template TConfig of SqlConfig
 * @template TLink of Link
 */
interface SqlConnector
{
    /**
     * Returns a new database connection based on the given configuration.
     * Implementations may provide further parameters, such as a Cancellation.
     *
     * @param TConfig $config
     *
     * @return TLink
     *
     * @throws ConnectionException
     */
    public function connect(SqlConfig $config, ?Cancellation $cancellation = null): Link;
}
