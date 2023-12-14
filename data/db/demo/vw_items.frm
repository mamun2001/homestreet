TYPE=VIEW
query=select `i`.`id` AS `item_id`,`i`.`item_name` AS `Item`,`c`.`id` AS `category_id`,`c`.`category` AS `category`,`m`.`id` AS `model_id`,`m`.`model` AS `model`,`b`.`id` AS `brand_id`,`b`.`brand` AS `brand`,`s`.`id` AS `size_id`,`s`.`size` AS `size`,`u`.`id` AS `unit_id`,`u`.`unit_name` AS `Unit` from (((((`demo`.`items` `i` left join `demo`.`category` `c` on(`i`.`category` = `c`.`id`)) left join `demo`.`models` `m` on(`i`.`model` = `m`.`id`)) left join `demo`.`brands` `b` on(`i`.`brand` = `b`.`id`)) left join `demo`.`sizes` `s` on(`i`.`size` = `s`.`id`)) left join `demo`.`units` `u` on(`i`.`unit` = `u`.`id`))
md5=b368a49293a63b0b9e1925bbcf33f686
updatable=0
algorithm=0
definer_user=root
definer_host=%
suid=1
with_check_option=0
timestamp=0001702535757508566
create-version=2
source=select  `i`.`id` as `item_id`,`i`.`item_name` AS `Item`,`c`.id as `category_id`,`c`.`category` AS `category`,`m`.id as `model_id`,`m`.`model` AS `model`,b.id as `brand_id`,`b`.`brand` AS `brand`,s.id as `size_id`,`s`.`size` AS `size`,u.id as `unit_id`,`u`.`unit_name` AS `Unit` from (((((`demo`.`items` `i` left join `demo`.`category` `c` on(`i`.`category` = `c`.`id`)) left join `demo`.`models` `m` on(`i`.`model` = `m`.`id`)) left join `demo`.`brands` `b` on(`i`.`brand` = `b`.`id`)) left join `demo`.`sizes` `s` on(`i`.`size` = `s`.`id`)) left join `demo`.`units` `u` on(`i`.`unit` = `u`.`id`))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `i`.`id` AS `item_id`,`i`.`item_name` AS `Item`,`c`.`id` AS `category_id`,`c`.`category` AS `category`,`m`.`id` AS `model_id`,`m`.`model` AS `model`,`b`.`id` AS `brand_id`,`b`.`brand` AS `brand`,`s`.`id` AS `size_id`,`s`.`size` AS `size`,`u`.`id` AS `unit_id`,`u`.`unit_name` AS `Unit` from (((((`demo`.`items` `i` left join `demo`.`category` `c` on(`i`.`category` = `c`.`id`)) left join `demo`.`models` `m` on(`i`.`model` = `m`.`id`)) left join `demo`.`brands` `b` on(`i`.`brand` = `b`.`id`)) left join `demo`.`sizes` `s` on(`i`.`size` = `s`.`id`)) left join `demo`.`units` `u` on(`i`.`unit` = `u`.`id`))
mariadb-version=110002
