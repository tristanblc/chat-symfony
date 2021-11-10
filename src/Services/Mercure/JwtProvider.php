<?php


namespace App\Services\Mercure;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;

class JwtProvider
{
    private string $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function __invoke(): string
    {
        $signer = new Sha256();

        return (new Builder())
            ->withClaim('mercure', ['publish' => ['*']])
            ->getToken(null, new Key($this->key))
            ->__toString();
    }
}
?>