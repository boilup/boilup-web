<?php

/**
 * Created by PhpStorm.
 * User: whiteco
 * Date: 9/2/2015
 * Time: 11:03 PM
 */
include('../pdo/pdorecords.php');

class record extends pdorecords {


    // functions?!
    // GetArtists, GetRecords, SaveNew, DeleteRecord, DeleteArtist, AddArtist

    public $artistName, $recordName;

    function save_new($artist, $albumName){
        try {
            //this is when we use the db?
            $stmt = $this->dbh->prepare("insert into records(artistid,recordName) values((select i.id from artists i where i.artistName =?),?)");
            $stmt->bindParam(1, $artist);
            $stmt->bindParam(2, $albumName);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getArtists(){
        //this is when we use the db?
        try {
            $stmt = $this->dbh->prepare("select artistName from artists");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return ($result);
        }catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getAlbums() {
        try {
            $stmt = $this->dbh->prepare("select * from combined");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return ($result);
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getAlbumInfo() {
        try {
            $stmt = $this->dbh->prepare("select * from records");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return ($result);
        }catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

    function deleteRecord($recordid){
        try {
            $stmt = $this->dbh->prepare("delete from records  where id = :blah ");
            $stmt->bindValue(':blah', $recordid);
            $stmt->execute();
            return;
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function deleteArtist($artist){

    }

}