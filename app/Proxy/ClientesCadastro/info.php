<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Informações sobre o cadastro do cliente.
 *
 * @pw_element string $dInc Data da Inclusão.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hInc Hora da Inclusão.<BR>No formato hh:mm:ss.
 * @pw_element string $uInc Usuário da Inclusão.
 * @pw_element string $dAlt Data da Alteração.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hAlt Hora da Alteração.<BR>No formato hh:mm:ss.
 * @pw_element string $uAlt Usuário da Alteração.
 * @pw_element string $cImpAPI Importado pela API (S/N).
 * @pw_complex info
 */

namespace App\Proxy\ClienteCadastro;

/**
 * Description of info
 *
 * @author Aloisio
 */
class info
{

    /**
     * Data da Inclusão.<BR>No formato dd/mm/aaaa.
     *
     * @var string
     */
    public $dInc;

    /**
     * Hora da Inclusão.<BR>No formato hh:mm:ss.
     *
     * @var string
     */
    public $hInc;

    /**
     * Usuário da Inclusão.
     *
     * @var string
     */
    public $uInc;

    /**
     * Data da Alteração.<BR>No formato dd/mm/aaaa.
     *
     * @var string
     */
    public $dAlt;

    /**
     * Hora da Alteração.<BR>No formato hh:mm:ss.
     *
     * @var string
     */
    public $hAlt;

    /**
     * Usuário da Alteração.
     *
     * @var string
     */
    public $uAlt;

    /**
     * Importado pela API (S/N).
     *
     * @var string
     */
    public $cImpAPI;

}
