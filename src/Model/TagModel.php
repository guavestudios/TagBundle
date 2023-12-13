<?php

namespace Guave\TagBundle\Model;

use Contao\Model;
use Contao\Model\Collection;

/**
 * Class TagModel
 * @package Guave\TagBundle\Model
 *
 * @property int $id
 * @property int $pid
 * @property int $sorting
 * @property int $tstamp
 * @property string $title
 * @property string $priority
 *
 * @method static TagModel|null findById($id, array $opt=array())
 * @method static TagModel|null findByPk($id, array $opt=array())
 * @method static TagModel|null findOneBy($col, $val, array $opt=array())
 * @method static TagModel|null findOneByPid($val, array $opt=array())
 * @method static TagModel|null findOneBySorting($val, array $opt=array())
 * @method static TagModel|null findOneByTstamp($val, array $opt=array())
 * @method static TagModel|null findOneByTitle($val, array $opt=array())
 * @method static TagModel|null findOneByPriority($val, array $opt=array())
 *
 * @method static Collection|TagModel[]|TagModel|null findByPid($val, array $opt=array())
 * @method static Collection|TagModel[]|TagModel|null findBySorting($val, array $opt=array())
 * @method static Collection|TagModel[]|TagModel|null findByTstamp($val, array $opt=array())
 * @method static Collection|TagModel[]|TagModel|null findByTitle($val, array $opt=array())
 * @method static Collection|TagModel[]|TagModel|null findByPriority($val, array $opt=array())
 * @method static Collection|TagModel[]|TagModel|null findMultipleByIds($var, array $opt=array())
 * @method static Collection|TagModel[]|TagModel|null findBy($col, $val, array $opt=array())
 * @method static Collection|TagModel[]|TagModel|null findAll(array $opt=array())
 *
 * @method static integer countById($id, array $opt=array())
 * @method static integer countByPid($val, array $opt=array())
 * @method static integer countBySorting($val, array $opt=array())
 * @method static integer countByTstamp($val, array $opt=array())
 * @method static integer countByTitle($val, array $opt=array())
 * @method static integer countByPriority($val, array $opt=array())
 */
class TagModel extends Model
{
    protected static $strTable = 'tl_tag';
}
