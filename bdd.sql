#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE `users`(
        `id_users`  Int  Auto_increment  NOT NULL ,
        `pseudo`    Varchar (50) NOT NULL ,
        `mail`      Varchar (255) NOT NULL ,
        `password`  Char (60) NOT NULL ,
        `admin`     Bool NOT NULL ,
        `userActif` TinyINT NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (`id_users`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: articles
#------------------------------------------------------------

CREATE TABLE `articles`(
        `id_news`    Int  Auto_increment  NOT NULL ,
        `title`      Varchar (255) NOT NULL ,
        `paragraphs` Text NOT NULL ,
        `id_users`   Int NOT NULL
	,CONSTRAINT articles_PK PRIMARY KEY (`id_news`)

	,CONSTRAINT articles_users_FK FOREIGN KEY (`id_users`) REFERENCES users(`id_users`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comments
#------------------------------------------------------------

CREATE TABLE `comments`(
        `id_comments` Int  Auto_increment  NOT NULL ,
        `comments`    Varchar (255) NOT NULL ,
        `id_news`     Int NOT NULL ,
        `id_users`    Int NOT NULL
	,CONSTRAINT comments_PK PRIMARY KEY (`id_comments`)

	,CONSTRAINT comments_articles_FK FOREIGN KEY (`id_news`) REFERENCES articles(`id_news`)
	,CONSTRAINT comments_users0_FK FOREIGN KEY (`id_users`) REFERENCES users(`id_users`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quizzTheme
#------------------------------------------------------------

CREATE TABLE `quizzTheme`(
        `id_quizzTheme` Int  Auto_increment  NOT NULL ,
        `themes`        Varchar (50) NOT NULL
	,CONSTRAINT quizzTheme_PK PRIMARY KEY (`id_quizzTheme`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: quizz
#------------------------------------------------------------

CREATE TABLE `quizz`(
        `id_quizz`      Int  Auto_increment  NOT NULL ,
        `id_users`      Int NOT NULL ,
        `id_quizzTheme` Int NOT NULL
	,CONSTRAINT quizz_PK PRIMARY KEY (`id_quizz`)

	,CONSTRAINT quizz_users_FK FOREIGN KEY (`id_users`) REFERENCES users(`id_users`)
	,CONSTRAINT quizz_quizzTheme0_FK FOREIGN KEY (`id_quizzTheme`) REFERENCES quizzTheme(`id_quizzTheme`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: results
#------------------------------------------------------------

CREATE TABLE `results`(
        `id_results` Int  Auto_increment  NOT NULL ,
        `points`     Int NOT NULL ,
        `id_users`   Int NOT NULL ,
        `id_quizz`   Int NOT NULL
	,CONSTRAINT results_PK PRIMARY KEY (`id_results`)

	,CONSTRAINT results_users_FK FOREIGN KEY (`id_users`) REFERENCES users(`id_users`)
	,CONSTRAINT results_quizz0_FK FOREIGN KEY (`id_quizz`) REFERENCES quizz(`id_quizz`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: questions
#------------------------------------------------------------

CREATE TABLE `questions`(
        `id_questions`  Int  Auto_increment  NOT NULL ,
        `time`          Int NOT NULL ,
        `questionQuizz` Varchar (255) NOT NULL ,
        `goodAnswers`   Varchar (255) NOT NULL ,
        `badAnswers1`   Varchar (255) NOT NULL ,
        `badAnswers2`   Varchar (255) NOT NULL ,
        `badAnswers3`   Varchar (255) NOT NULL ,
        `id_quizz`      Int NOT NULL
	,CONSTRAINT questions_PK PRIMARY KEY (`id_questions`)

	,CONSTRAINT questions_quizz_FK FOREIGN KEY (`id_quizz`) REFERENCES quizz(`id_quizz`)
)ENGINE=InnoDB;

