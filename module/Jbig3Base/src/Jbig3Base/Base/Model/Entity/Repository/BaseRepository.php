<?php

namespace Jbig3Base\Base\Model\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class BaseRepository extends EntityRepository
{

    // wird wahrscheinlich garnicht gebraucht

	// TODO em:
	// - vendor\zf-commons\zfc-user-doctrine-orm\src\ZfcUserDoctrineORM\Mapper\User.php
	// - zfcUserDoctrineORM
	// 		- Module.php
	// 		- Mapper __construct()

	// TODO: alle DB Operationen sollten hier abstract verankert werden
	// - http://blog.mayflower.de/2014-Zend-Framework-2-mit-Doctrine-ORM.html
	// - http://stackoverflow.com/questions/14102902/injecting-the-service-manager-to-build-a-doctrine-repository-in-zf2
	// - http://stackoverflow.com/questions/13065245/zf2-and-entitymanager-doctrine

	// TODO: persist
}