<?php

namespace Xu\Components;

use Xu\Contracts\Foundation\Foundation as FoundationContract;

/**
 * Component class.
 */
abstract class Component {

    /**
     * xu instance.
     *
     * @var \Xu\Contracts\Foundation\Foundation
     */
    protected $xu;

    /**
     * Create a new component instance.
     *
     * @param \Xu\Contracts\Foundation\Foundation $xu
     */
    public function __construct( FoundationContract $xu ) {
        $this->xu = $xu;
    }

    /**
     * Bootstrap the component.
     *
     * @codeCoverageIgnore
     */
    public function bootstrap() {
    }

    /**
     * Return the given object. Useful for chaining.
     *
     * @param mixed $obj
     *
     * @return mixed
     */
    protected function with( $obj ) {
        return $obj;
    }

}
