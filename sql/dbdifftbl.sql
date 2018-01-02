CREATE TABLE dbdifftbl 
(
  dbdiffID int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  atpnumber varchar(255) NOT NULL,
  rackname varchar(255) NOT NULL,
  customername varchar(255) NOT NULL,
  dbsourcename varchar(255) NOT NULL,
  dbtargetname varchar(255) NOT NULL,
  dbdiffappoption varchar(255) NOT NULL,
  dbtranxrecord int(11) NOT NULL,
  dbdiffsubmitted timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  logbook boolean not null default 0,
  PRIMARY KEY (dbdiffID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;