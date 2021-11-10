<?php


namespace App\Services\Mercure;

use App\Entity\Channel;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;

class CookieJwtProvider
{
    private string $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function __invoke(Channel $channel): string
    {
        $signer = new Sha256();
        return (new Builder())
            ->withClaim('mercure', ['subscribe' => [sprintf('http://localhost:8000/channel/%s', $channel->getId())]]) // Attention le claim est différent qu'avec le JWTProvider. Ici on précise le topic privé que l'on souhaite avec le droit "d'accès"
            ->getToken($signer, new Key($this->key))
            ->__toString()
            ;
    }
}
