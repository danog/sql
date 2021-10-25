<?php

namespace Amp\Sql;

interface Result extends \Traversable
{
    /**
     * Resolves with a new instance of Result if another result is available after this result. Resolves with null if
     * no further results are available.
     *
     * @return Result|null
     */
    public function getNextResult(): ?Result;

    /**
     * Returns the number of rows affected or returned by the query if applicable or null if the number of rows is
     * unknown or not applicable to the query.
     *
     * @return int|null
     */
    public function getRowCount(): ?int;
}
