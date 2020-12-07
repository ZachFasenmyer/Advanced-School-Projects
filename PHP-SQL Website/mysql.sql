CREATE TABLE members (
  member_id int AUTO_INCREMENT
  ,firstname varchar(100) default NULL
  ,lastname varchar(100) default NULL
  ,login varchar(100) NOT NULL default ''
  ,passwd varchar(32) NOT NULL default ''
  ,phone varchar(100) NOT NULL default '1'
  ,address varchar(100) NOT NULL default '1'
  ,email varchar(100) NOT NULL default '1'
  ,education varchar(100) NOT NULL default '1'
  ,CONSTRAINT members_pk PRIMARY KEY (member_id)
);

INSERT INTO members (member_id, firstname, lastname, login, passwd) VALUES("1", "Jatinder", "Thind", "phpsense", "ba018360fc26e0cc2e929b8e071f052d");
