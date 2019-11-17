<?php

class Article {
	
	public function __construct() {
		
	}
	
// Getters

	public function getTitle() {
		return $this->title;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getBody() {
		return $this->body;
	}
	
	public function getPublishStatus() {
		return $this->publishStatus;
	}
	
	public function getPublishDate() {
		return $this->publishDate;
	}
	
	public function getCreationDate() {
		return $this->creationDate;
	}
	
	public function getPath() {
		return $this->path;
	}
	
	public function getParent() {
		return $this->parent;
	}
	
	public function getEtag() {
		return $this->etag;
	}
	
	public function getLastModified() {
		return $this->lastModified;
	}

// Setters
	

// Fields

	private $title;
	private $description;
	private $body;
	private $publishStatus;
	private $publishDate;
	private $creationDate;
	private $path;
	private $parent;
	private $etag;
	private $lastModified;
	
}


?>