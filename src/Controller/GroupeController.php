<?php

use App\Document\Users;

use App\Document\Groupe;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends AbstractController
{
    // ...

    public function addUserToGroup($userId, $groupId, DocumentManager $dm)
    {
        // Récupérer les entités User et Group par leur ID
        $user = $dm->getRepository(Users::class)->find($userId);
        $group = $dm->getRepository(Groupe::class)->find($groupId);

        // Vérifier si les entités existent
        if (!$user || !$group) {
            throw $this->createNotFoundException('Utilisateur ou groupe introuvable.');
        }

        // Ajouter l'utilisateur au groupe
        $group->addUser($user);
        $dm->flush();

        return new Response('Utilisateur ajouté au groupe avec succès.');
    }

    public function listGroups(DocumentManager $dm)
    {
        $groups = $dm->getRepository(Groupe::class)->findAll();

        return $this->render('group/list_groups.html.twig', [
            'groups' => $groups,
        ]);
    }
    // ...
}