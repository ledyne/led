CREATE TABLE userlogtbl 
(
  resID int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (resID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;