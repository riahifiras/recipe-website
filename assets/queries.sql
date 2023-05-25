CREATE TABLE posts(
    post_id int(11) AUTO_INCREMENT,
    user_id int(11),
    posting_date datetime,
    picture varchar(255),
    num_likes int(5),
    description text,
    PRIMARY KEY(post_id)
);

CREATE TABLE users(
    user_id int(11) AUTO_INCREMENT,
    username varchar(30),
    email varchar(50),
    password varchar(255),
    reg_date datetime,
    name varchar(30),
    profile_pic varchar(255),
    description text,
    follower_count int(5),
    PRIMARY KEY(user_id)
);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (10,"superfiras",
"ferr@gmail.com","12345678",
"khaled Gassara","assets\\people\\khaledGS.jpg",
"I am Chef khaled Gassara, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",447);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (11,"firas",
"firas.riahi@ensi-uma.tn","12345678",
"firas","assets\\people\\firas.jpg",
"I am Chef firas, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",952);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (12,"layel",
"layel.hajji@ensi-uma.tn","12345678",
"Khaled Mrad","assets\\people\\khaled.jpg",
"I am Chef Khaled Mrad, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",421);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (14,"supra",
"kiki@gmail.com","12345678",
"tom","assets\\people\\person2.jpg",
"I am Chef tom, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",125);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (15,"marwa",
"marwan-agrebi@ensi-uma.tn","12345678",
"marwane agrebi","assets\\people\\marwane.jpg",
"I am Chef marwane agrebi, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",561);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (16,"aymen",
"ayman.benamor@ensi-uma.tn","12345678",
"ayman ben amor","assets\\people\\ayman.jpg",
"I am Chef ayman ben amor, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",482);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (17,"helena","yay@gmail.com","12345678","helena","assets\\people\\person1.jpg","I am Chef helena, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",642);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (18,"eyaa","eya@gmail.com","12345678",
"eya khalfallah","assets\\people\\eya.jpg",
"I am Chef eya khalfallah, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",715);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (19,"aziz",
"abdelaziz.kacem@ensi-uma.tn","12345678",
"abdelaziz kacem","assets\\people\\aziz2.jpg",
"I am Chef abdelaziz kacem, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",355);

insert into users (user_id,username,email,password,name,profile_pic,description,follower_count)
values (20,"mohsen",
"medaziz.lahdheri@ensi-uma.tn","12345678",
"med aziz lahdheri","assets\\people\\aziz.jpg",
"I am Chef med aziz lahdheri, and I am honored to be standing before you today. Cooking is not just a profession for me; it is a lifelong passion that ignites my soul and fuels my creativity.",4288);



insert into posts (user_id,picture,num_likes,description) 
values (10,"assets\\food\\ojja.jpeg",100,"Ojja is a popular Tunisian dish consisting of eggs cooked in a tomato-based sauce with spices. It often includes ingredients such as meat, seafood, and vegetables, which are simmered together to create a rich and flavorful sauce. The eggs are cracked into the sauce and cooked until set, adding a creamy texture. Ojja is typically served hot, garnished with herbs, and enjoyed with bread. It is a versatile and comforting dish that can be enjoyed for any meal of the day.");

insert into posts (user_id,picture,num_likes,description) 
values (11,"assets\\food\\macaron.jpg",50,"French macarons are delicate and elegant sweet treats that have gained worldwide popularity. These bite-sized confections consist of two almond meringue cookies sandwiched together with a creamy filling. Macarons have a smooth, crisp exterior and a soft, chewy interior, creating a delightful texture contrast.");

insert into posts (user_id,picture,num_likes,description) 
values (12,"assets\\food\\cordon_bleu.jpeg",40,"Cordon Bleu is a classic dish that originated in Switzerland but has gained popularity worldwide. It is known for its indulgent combination of flavors and textures. Cordon Bleu typically consists of a thinly pounded chicken breast or veal cutlet that is stuffed with ham and cheese, then breaded and fried to a golden brown.");

insert into posts (user_id,picture,num_likes,description) 
values (13,"assets\\food\\ramen.jpeg",60,"Ramen is a popular Japanese noodle dish that has become beloved worldwide. It is known for its rich and flavorful broth, accompanied by noodles and a variety of toppings. Ramen has numerous regional variations in Japan and offers a comforting and satisfying eating experience.");

insert into posts (user_id,picture,num_likes,description) 
values (14,"assets\\food\\fondant.jpg",70,"Fondant is a decadent dessert that is known for its rich and gooey chocolate center. It is a popular and indulgent treat enjoyed by chocolate lovers worldwide. ");

insert into posts (user_id,picture,num_likes,description) 
values (15,"assets\\food\\cheesecake.jpeg",90,"Cheesecake is a beloved dessert known for its creamy and luscious texture, as well as its rich and indulgent flavor. It is a classic dessert that has variations in different culinary traditions around the world.");

insert into posts (user_id,picture,num_likes,description) 
values (16,"assets\\food\\tartelette_fraise.jpg",100,"Tartelette au fraise, also known as strawberry tartlet, is a delightful French pastry that showcases the vibrant and sweet flavors of fresh strawberries. It is a small tart typically made with a crisp and buttery pastry crust filled with a luscious cream or custard and topped with fresh strawberries.");

insert into posts (user_id,picture,num_likes,description) 
values (17,"assets\\food\\steak.jpg",70,"Grilled steak is a classic and beloved dish that showcases the rich flavors of tender and juicy beef. It is a popular choice for meat lovers, offering a satisfying and delicious dining experience.");

insert into posts (user_id,picture,num_likes,description) 
values (18,"assets\\food\\spagetti.jpg",60,"Spaghetti is a classic Italian pasta dish that has become popular worldwide. It consists of long, thin pasta noodles made from durum wheat semolina, typically served with a variety of savory sauces.");

insert into posts (user_id,picture,num_likes,description) 
values (19,"assets\\food\\couscous.jpg",90,"Tunisian couscous, known as 'couscous Tunisien' or 'couscous à la tunisienne,' is a traditional dish that holds a special place in Tunisian cuisine. It is a hearty and flavorful dish that combines semolina couscous grains with a variety of vegetables, meats, and aromatic spices.");

insert into posts (user_id,picture,num_likes,description) 
values (20,"assets\\food\\suci.jpg",100,"Sushi is a popular Japanese dish that consists of bite-sized portions of vinegared rice combined with a variety of ingredients such as raw or cooked seafood, vegetables, and sometimes tropical fruits. It is renowned for its delicate flavors, beautiful presentation, and the artistry involved in its preparation.");