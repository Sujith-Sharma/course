insert into cources values('D001','Datascience Basics','DataScience');
insert into cources values('D002','R Basics','DataScience');
insert into cources values('D003','Python Basics','DataScience');
insert into cources values('D004','R Advanced','DataScience');
insert into cources values('D005','Python Advanced','DataScience');
insert into cources values('D006','DataAnalysis with R','DataScience');
insert into cources values('D007','Python DataAnalysis','DataScience');
ALTER TABLE login ADD FOREIGN KEY (UserID) REFERENCES signup(UserID);
ALTER TABLE login ADD FOREIGN KEY (psw) REFERENCES signup(psw);