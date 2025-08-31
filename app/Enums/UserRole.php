<?php

namespace App\Enums;

enum UserRole: string
{
    case Administrador = 'administrador';
    case MatrimonioDirector = 'matrimonio director';
    case Consejero = 'consejero';
    case Facilitador = 'facilitador';
    case Participante = 'participante';
}