TYPE=VIEW
query=select `i`.`item_name` AS `Item`,`c`.`category` AS `category`,`m`.`model` AS `model`,`b`.`brand` AS `brand`,`s`.`size` AS `size`,`u`.`unit_name` AS `Unit` from (((((`demo`.`items` `i` left join `demo`.`category` `c` on(`i`.`category` = `c`.`id`)) left join `demo`.`models` `m` on(`i`.`model` = `m`.`id`)) left join `demo`.`brands` `b` on(`i`.`brand` = `b`.`id`)) left join `demo`.`sizes` `s` on(`i`.`size` = `s`.`id`)) left join `demo`.`units` `u` on(`i`.`unit` = `u`.`id`))
md5=257f5e6da8e80d98c2742a4b30336313
updatable=0
algorithm=0
definer_user=root
definer_host=%
suid=2
with_check_option=0
timestamp=0001702220772927242
create-version=2
source=SELECT i.item_name as `Item`,c.category,m.model,b.brand,s.size,u.unit_name as `Unit`\nFROm items i left OUTER join category c on i.category=c.id\nleft OUTER JOIN models m on i.model=m.id\nleft OUTER JOIN brands b on i.brand=b.id\nleft OUTER JOIN sizes s on i.size=s.id\nleft OUTER JOIN units u on i.unit=u.id
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `i`.`item_name` AS `Item`,`c`.`category` AS `category`,`m`.`model` AS `model`,`b`.`brand` AS `brand`,`s`.`size` AS `size`,`u`.`unit_name` AS `Unit` from (((((`demo`.`items` `i` left join `demo`.`category` `c` on(`i`.`category` = `c`.`id`)) left join `demo`.`models` `m` on(`i`.`model` = `m`.`id`)) left join `demo`.`brands` `b` on(`i`.`brand` = `b`.`id`)) left join `demo`.`sizes` `s` on(`i`.`size` = `s`.`id`)) left join `demo`.`units` `u` on(`i`.`unit` = `u`.`id`))
mariadb-version=110002
