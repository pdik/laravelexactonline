<?php
namespace Pdik\Traits;
/**
 * HasExactConnection
 */
trait HasExactConnection{

    /**
     * Get exact connection
     * @return mixed
     */
    public function exactAble()
    {
        return $this->morphTo();
    }
}