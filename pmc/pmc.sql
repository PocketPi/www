

CREATE TABLE `board_members` (
  `board_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `board_email` varchar(255) NOT NULL,
  `board_type` varchar(255) NOT NULL
);

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(64) NOT NULL UNIQUE KEY,
  `firstname` varchar(64) NOT NULL,
  `surname` varchar(64) NOT NULL,
  `birthdate` varchar(16) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `zipcode` varchar(8) DEFAULT NULL,
  `hashed_password` varchar(255) NOT NULL,
  `active_member` tinyint(1) NOT NULL DEFAULT '1',
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `motorcycles` (
  `mc_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `picture` blob
);

INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member0@mail.com","Anders","Andersen","01-01-90","Address 0","2800","password",1);
INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member1@mail.com","Brian","Bøge","01-01-90","Address 1","2800","password",1);
INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member2@mail.com","Carla","Christensen","01-01-90","Address 2","2800","password",1);
INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member3@mail.com","Dorte","Dyrholm","01-01-90","Address 3","2800","password",1);
INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member4@mail.com","Egon","Espersen","01-01-90","Address 4","2800","password",1);
INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member5@mail.com","Frans","Finnsen","01-01-90","Address 5","2800","password",1);
INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member6@mail.com","Gert","Gertsen","01-01-90","Address 6","2800","password",1);
INSERT into members (email,firstname,surname,birthdate,address,zipcode,hashed_password,active_member)values("member7@mail.com","Helle","Hansen","01-01-90","Address 7","2800","password",1);

insert into board_members (member_id, board_email, board_type) values ((select member_id from members where firstname="Anders"), "præz@mail.com", "Præz");
insert into board_members (member_id, board_email, board_type) values ((select member_id from members where firstname="Egon"), "kasser@mail.com", "kasser");
insert into board_members (member_id, board_email, board_type) values ((select member_id from members where firstname="Dorte"), "medlem1@mail.com", "medlem");
insert into board_members (member_id, board_email, board_type) values ((select member_id from members where firstname="Frans"), "medlem2@mail.com", "medlem");
insert into board_members (member_id, board_email, board_type) values ((select member_id from members where firstname="Helle"), "suppleant@mail.com", "suppleant");



insert into motorcycles (member_id, make, model, notes) values ((select member_id from members where firstname="Anders"), "Yamaha", "R6", "bla bla bla");
insert into motorcycles (member_id, make, model, notes) values ((select member_id from members where firstname="Anders"), "Yamaha", "R1", "bla bla bla");
insert into motorcycles (member_id, make, model, notes) values ((select member_id from members where firstname="Brian"), "Ducati", "V2", "bla bla bla");

select members.firstname, members.surname, motorcycles.make, motorcycles.model
from motorcycles
inner join members 
on motorcycles.member_id = members.member_id
where members.firstname="Anders";

select * from members where member_id=1;

select * from board_members where member_id=1;

select * from motorcycles where member_id=1;




