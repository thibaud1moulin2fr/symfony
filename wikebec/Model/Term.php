<?php
/**
 * Created by PhpStorm.
 * User: tmoulin2016
 * Date: 27/04/2017
 * Time: 10:14
 */

namespace Model;


class Term
{
    private $id;
    private $term;
    private $definition1;
    private $definition2;
    private $category;
    private $example;
    private $translation;
    private $variations;
    private $pronunciation;
    private $nature;
    private $gender;
    private $number;
    private $origin;
    private $createdDate;
    private $editedDate;
    private $votesCount;

    /**
     * Terms constructor.
     * @param $id
     * @param $term
     * @param $definition1
     * @param $definition2
     * @param $category
     * @param $example
     * @param $translation
     * @param $variations
     * @param $pronunciation
     * @param $nature
     * @param $gender
     * @param $number
     * @param $origin
     * @param $createdDate
     * @param $editedDate
     * @param $votesCount
     */
    public function __construct()
    {

    }
    /*
    public function __construct($id, $term, $definition1, $definition2, $category, $example, $translation, $variations, $pronunciation, $nature, $gender, $number, $origin, $createdDate, $editedDate, $votesCount)
    {
        $this->id = $id;
        $this->term = $term;
        $this->definition1 = $definition1;
        $this->definition2 = $definition2;
        $this->category = $category;
        $this->example = $example;
        $this->translation = $translation;
        $this->variations = $variations;
        $this->pronunciation = $pronunciation;
        $this->nature = $nature;
        $this->gender = $gender;
        $this->number = $number;
        $this->origin = $origin;
        $this->createdDate = $createdDate;
        $this->editedDate = $editedDate;
        $this->votesCount = $votesCount;
    }*/

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param mixed $term
     */
    public function setTerm($term)
    {
        $this->term = $term;
    }

    /**
     * @return mixed
     */
    public function getDefinition1()
    {
        return $this->definition1;
    }

    /**
     * @param mixed $definition1
     */
    public function setDefinition1($definition1)
    {
        $this->definition1 = $definition1;
    }

    /**
     * @return mixed
     */
    public function getDefinition2()
    {
        return $this->definition2;
    }

    /**
     * @param mixed $definition2
     */
    public function setDefinition2($definition2)
    {
        $this->definition2 = $definition2;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     */
    public function setExample($example)
    {
        $this->example = $example;
    }

    /**
     * @return mixed
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * @param mixed $translation
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
    }

    /**
     * @return mixed
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * @param mixed $variations
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;
    }

    /**
     * @return mixed
     */
    public function getPronunciation()
    {
        return $this->pronunciation;
    }

    /**
     * @param mixed $pronunciation
     */
    public function setPronunciation($pronunciation)
    {
        $this->pronunciation = $pronunciation;
    }

    /**
     * @return mixed
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * @param mixed $nature
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param mixed $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return mixed
     */
    public function getEditedDate()
    {
        return $this->editedDate;
    }

    /**
     * @param mixed $editedDate
     */
    public function setEditedDate($editedDate)
    {
        $this->editedDate = $editedDate;
    }

    /**
     * @return mixed
     */
    public function getVotesCount()
    {
        return $this->votesCount;
    }

    /**
     * @param mixed $votesCount
     */
    public function setVotesCount($votesCount)
    {
        $this->votesCount = $votesCount;
    }
}