TYPE=VIEW
query=select `demo`.`districts`.`id` AS `id`,`demo`.`districts`.`district` AS `district`,`demo`.`divisions`.`division` AS `division` from (`demo`.`districts` join `demo`.`divisions` on(`demo`.`divisions`.`id` = `demo`.`districts`.`division`)) order by `demo`.`districts`.`district`
md5=3b2509dc2da86e3d0c01f0a19be6ab52
updatable=1
algorithm=0
definer_user=root
definer_host=%
suid=1
with_check_option=0
timestamp=0001691523656546829
create-version=2
source=select `demo`.`districts`.`id` AS `id`,`demo`.`districts`.`district` AS `district`,`demo`.`divisions`.`division` AS `division` from (`demo`.`districts` join `demo`.`divisions` on(`demo`.`divisions`.`id` = `demo`.`districts`.`division`)) \n ORDER by districts.district
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `demo`.`districts`.`id` AS `id`,`demo`.`districts`.`district` AS `district`,`demo`.`divisions`.`division` AS `division` from (`demo`.`districts` join `demo`.`divisions` on(`demo`.`divisions`.`id` = `demo`.`districts`.`division`)) order by `demo`.`districts`.`district`
mariadb-version=110002
