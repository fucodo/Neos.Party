<?php
namespace fucodo\Neos\Party\Domain\Model;

/*
 * This file is part of the Neos.Party package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A person name
 *
 * @Flow\Entity(readOnly=true)
 * @ORM\Table(
 *     name="neos_party_domain_model_personname",
 *     indexes={
 *         @ORM\Index(name="idx_fucodo_neos_party_title", columns={"title"}),
 *         @ORM\Index(name="idx_fucodo_neos_party_first_name", columns={"firstName"}),
 *         @ORM\Index(name="idx_fucodo_neos_party_middle_name", columns={"middleName"}),
 *         @ORM\Index(name="idx_fucodo_neos_party_last_name", columns={"lastName"}),
 *         @ORM\Index(name="idx_fucodo_neos_party_other_name", columns={"otherName"}),
 *         @ORM\Index(name="idx_fucodo_neos_party_alias", columns={"alias"}),
 *         @ORM\Index(name="idx_fucodo_neos_party_full_name", columns={"fullName"})
 *     }
 * )
 */
class PersonName extends \Neos\Party\Domain\Model\PersonName {
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $middleName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $otherName;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @var string
     */
    protected $fullName;
}
