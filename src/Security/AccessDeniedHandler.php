<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface 
{
    private array $attributes = [];
    private mixed $subject = null;

    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        // Votre logique pour gérer l'erreur d'accès refusé
        // Vous pouvez utiliser $this->attributes et $this->subject selon vos besoins

        // Exemple : envoie une réponse HTTP 403 (Forbidden)
        return new Response('Access Denied', 403);
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array|string $attributes): void
    {
        $this->attributes = (array) $attributes;
    }

    public function getSubject(): mixed
    {
        return $this->subject;
    }

    public function setSubject(mixed $subject): void
    {
        $this->subject = $subject;
    }
}
