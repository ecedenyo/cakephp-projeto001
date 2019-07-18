<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticlesCat Entity
 *
 * @property int $id
 * @property string $nome_cate_artigo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Article[] $articles
 */
class ArticlesCat extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_cate_artigo' => true,
        'created' => true,
        'modified' => true,
        'articles' => true
    ];
}
