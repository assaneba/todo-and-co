<?php

namespace App\Security;

use App\Entity\Task;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class TaskVoter extends Voter
{
    private const DELETE = 'delete';
    private const DELETE_ANONYME = 'deleteAnonyme';

    protected function supports($attribute, $subject)
    {
        return in_array($attribute, [Self::DELETE, Self::DELETE_ANONYME])
            && $subject instanceof Task;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        switch ($attribute) {
            case Self::DELETE:
                return $user === $subject->getUser();
                break;
            case Self::DELETE_ANONYME:

                if ($subject->getUser()->getUsername() === 'Anonyme' && in_array("ROLE_ADMIN", $user->getRoles())) {
                    return true;
                } else {
                    return false;
                }
                break;
        }

        return false;
    }
}
