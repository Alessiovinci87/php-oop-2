<?php
class InvalidPriceException extends Exception {
    public function __construct($message = "Prezzo non valido", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
?>
