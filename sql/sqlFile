CREATE TABLE `2035081_letstalk`.`Person`(
	`Email` VARCHAR(255) NOT NULL,
	`FirstName` VARCHAR(255) NOT NULL,
	`LastName` VARCHAR(255) NOT NULL,
	`Password` VARCHAR(255) NOT NULL,
	`UserAdjective` VARCHAR(20) NOT NULL,
	`UserNoun` VARCHAR(35) NOT NULL,
	`Gender` ENUM('M', 'F', 'O') NOT NULL,
	`SmallAchievement` VARCHAR(140) NOT NULL,
	`PostalCode` VARCHAR(7) NOT NULL,
	`StreetName` VARCHAR(255) NOT NULL,
	`StreetNum` INT NOT NULL,
	`City` VARCHAR(255) NOT NULL,	
	`Region` VARCHAR(255) NOT NULL,
 	`Country` VARCHAR(255) NOT NULL,

 	UNIQUE (`UserAdjective`, `UserNoun`),
 	PRIMARY KEY (`Email`)
) ENGINE = MyISAM;

CREATE TABLE `2035081_letstalk`.`Listener`(
	`Email` VARCHAR(255) NOT NULL,
	`ProblemSolver` INT NOT NULL,
	`ListeningExperience` INT NOT NULL,
	`PersonalExperience` INT NOT NULL,
	`Bluntness` INT NOT NULL,

	CONSTRAINT chk_values CHECK (ProblemSolver > 0 AND ProblemSolver <= 100 AND
		ListeningExperience > 0 AND ListeningExperience <= 100 AND
		PersonalExperience > 0 AND PersonalExperience <= 100),

	PRIMARY KEY (`Email`),
	FOREIGN KEY (`Email`) REFERENCES Person (`Email`)
) ENGINE = MyISAM;

CREATE TABLE `2035081_letstalk`.`UserAdjective`(
	`Adjective` VARCHAR(20) NOT NULL,

	PRIMARY KEY (`Adjective`)
) ENGINE = MYISAM;

CREATE TABLE `2035081_letstalk`.`UserNoun`(
	`Noun` VARCHAR(35) NOT NULL,

	PRIMARY KEY (`Noun`)
) ENGINE = MYISAM;

CREATE TABLE `2035081_letstalk`.`Log`(
	`ListenerEmail` VARCHAR(255) NOT NULL,
	`TalkerEmail` VARCHAR(255) NOT NULL,
	`SenderEmail` VARCHAR(255) NOT NULL,
	`Message` VARCHAR(1023) NOT NULL,
	`TimeStamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

	CONSTRAINT chk_emails CHECK (ListenerEmail != TalkerEmail),
	CONSTRAINT chk_sender CHECK (SenderEmail = ListenerEmail OR SenderEmail = TalkerEmail OR SenderEmail = "SYSTEM"),
	FOREIGN KEY (`SenderEmail`) REFERENCES Person (`Email`),
	FOREIGN KEY (`ListenerEmail`) REFERENCES Person (`Email`),
	FOREIGN KEY (`TalkerEmail`) REFERENCES Person (`Email`),
	PRIMARY KEY (`ListenerEmail`, `TalkerEmail`, `TimeStamp`)
) ENGINE = MYISAM;