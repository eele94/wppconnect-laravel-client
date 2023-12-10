<?php

namespace Eele94\Wppconnect\Api\Resource;

use Eele94\Wppconnect\Api\Requests\Group\AddParticipant;
use Eele94\Wppconnect\Api\Requests\Group\CreateGroup;
use Eele94\Wppconnect\Api\Requests\Group\DemoteParticipant;
use Eele94\Wppconnect\Api\Requests\Group\GetAllBroadcastList;
use Eele94\Wppconnect\Api\Requests\Group\GetAllGroups;
use Eele94\Wppconnect\Api\Requests\Group\GetGroupAdmins;
use Eele94\Wppconnect\Api\Requests\Group\GetGroupInfoFromInviteLink;
use Eele94\Wppconnect\Api\Requests\Group\GetGroupInviteLink;
use Eele94\Wppconnect\Api\Requests\Group\GetGroupMembers;
use Eele94\Wppconnect\Api\Requests\Group\GetGroupMembersIds;
use Eele94\Wppconnect\Api\Requests\Group\JoinGroupByCode;
use Eele94\Wppconnect\Api\Requests\Group\LeaveGroup;
use Eele94\Wppconnect\Api\Requests\Group\PromoteParticipant;
use Eele94\Wppconnect\Api\Requests\Group\RemoveParticipant;
use Eele94\Wppconnect\Api\Requests\Group\SetGroupDescription;
use Eele94\Wppconnect\Api\Requests\Group\SetGroupProperty;
use Eele94\Wppconnect\Api\Requests\Group\SetGroupSubject;
use Eele94\Wppconnect\Api\Requests\Group\SetMessagesAdminsOnly;
use Eele94\Wppconnect\Api\Resource;
use Saloon\Contracts\Response;

class Group extends Resource
{
    public function createGroup(string $session, mixed $name, mixed $participants): Response
    {
        return $this->connector->send(new CreateGroup($session, $name, $participants));
    }

    public function joinGroupByCode(string $session, mixed $inviteCode): Response
    {
        return $this->connector->send(new JoinGroupByCode($session, $inviteCode));
    }

    public function addParticipant(string $session, mixed $groupId, mixed $phone): Response
    {
        return $this->connector->send(new AddParticipant($session, $groupId, $phone));
    }

    public function demoteParticipant(string $session, mixed $groupId, mixed $phone): Response
    {
        return $this->connector->send(new DemoteParticipant($session, $groupId, $phone));
    }

    public function promoteParticipant(string $session, mixed $groupId, mixed $phone): Response
    {
        return $this->connector->send(new PromoteParticipant($session, $groupId, $phone));
    }

    public function getAllBroadcastList(string $session): Response
    {
        return $this->connector->send(new GetAllBroadcastList($session));
    }

    public function getAllGroups(string $session): Response
    {
        return $this->connector->send(new GetAllGroups($session));
    }

    public function getGroupAdmins(string $session): Response
    {
        return $this->connector->send(new GetGroupAdmins($session));
    }

    public function getGroupInfoFromInviteLink(string $session, mixed $invitecode): Response
    {
        return $this->connector->send(new GetGroupInfoFromInviteLink($session, $invitecode));
    }

    public function getGroupInviteLink(string $session): Response
    {
        return $this->connector->send(new GetGroupInviteLink($session));
    }

    public function getGroupMembersIds(string $session): Response
    {
        return $this->connector->send(new GetGroupMembersIds($session));
    }

    public function getGroupMembers(string $session): Response
    {
        return $this->connector->send(new GetGroupMembers($session));
    }

    public function leaveGroup(string $session, mixed $groupId): Response
    {
        return $this->connector->send(new LeaveGroup($session, $groupId));
    }

    public function removeParticipant(string $session, mixed $groupId, mixed $phone): Response
    {
        return $this->connector->send(new RemoveParticipant($session, $groupId, $phone));
    }

    public function setGroupDescription(string $session, mixed $groupId, mixed $description): Response
    {
        return $this->connector->send(new SetGroupDescription($session, $groupId, $description));
    }

    public function setGroupProperty(string $session, mixed $groupId, mixed $property, mixed $value): Response
    {
        return $this->connector->send(new SetGroupProperty($session, $groupId, $property, $value));
    }

    public function setGroupSubject(string $session, mixed $groupId, mixed $title): Response
    {
        return $this->connector->send(new SetGroupSubject($session, $groupId, $title));
    }

    public function setMessagesAdminsOnly(string $session, mixed $groupId, mixed $value): Response
    {
        return $this->connector->send(new SetMessagesAdminsOnly($session, $groupId, $value));
    }
}
