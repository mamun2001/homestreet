TYPE=VIEW
query=select `p`.`id` AS `id`,`p`.`project_name` AS `project_name`,`p`.`project_location` AS `project_location`,`p`.`tender_id` AS `tender_id`,`p`.`bid_amount` AS `bid_amount`,`p`.`security_money` AS `security_money`,`p`.`bank` AS `bank`,`p`.`duration` AS `duration`,`p`.`time` AS `time`,`p`.`start_date` AS `start_date`,`p`.`end_date` AS `end_date`,`p`.`status` AS `status`,`l`.`district` AS `district`,`l`.`division` AS `division` from (`demo`.`projects` `p` join `demo`.`vw_location` `l` on(`p`.`project_location` = `l`.`id`))
md5=effd34c68026c25438a76c282c225a6c
updatable=1
algorithm=0
definer_user=root
definer_host=%
suid=2
with_check_option=0
timestamp=0001692385537399541
create-version=2
source=SELECT p.*, l.district,l.division\nfrom projects p INNER JOIN vw_location l on p.project_location=l.id
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `p`.`id` AS `id`,`p`.`project_name` AS `project_name`,`p`.`project_location` AS `project_location`,`p`.`tender_id` AS `tender_id`,`p`.`bid_amount` AS `bid_amount`,`p`.`security_money` AS `security_money`,`p`.`bank` AS `bank`,`p`.`duration` AS `duration`,`p`.`time` AS `time`,`p`.`start_date` AS `start_date`,`p`.`end_date` AS `end_date`,`p`.`status` AS `status`,`l`.`district` AS `district`,`l`.`division` AS `division` from (`demo`.`projects` `p` join `demo`.`vw_location` `l` on(`p`.`project_location` = `l`.`id`))
mariadb-version=110002
