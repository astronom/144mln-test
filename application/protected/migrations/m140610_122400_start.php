<?php

class m140610_122400_start extends CDbMigration
{
	public function up()
	{
        Yii::app()->db->createCommand("
            CREATE TABLE `product` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `product_id` int(11) NOT NULL,
              `name` varchar(255) NOT NULL,
              `description` text NOT NULL,
              `inet_price` int(11) NOT NULL DEFAULT '0',
              `old_price` int(11) NOT NULL DEFAULT '0',
              `price` int(11) NOT NULL DEFAULT '0',
              `reviews_num` int(11) NOT NULL DEFAULT '0',
              `image_url` varchar(255) NOT NULL,
              PRIMARY KEY (`id`),
              KEY `id` (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

            insert  into `product`(`id`,`product_id`,`name`,`description`,`inet_price`,`old_price`,`price`,`reviews_num`,`image_url`) values (1,1,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus quam vitae nunc mollis, vel lobortis mi ultricies. Praesent quis dapibus mi, ac euismod lacus. Fusce vel luctus diam. Morbi porttitor turpis leo. Nunc pharetra, augue et vehicula mattis, magna elit sagittis felis, vitae placerat purus quam vel nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ac lectus id turpis tristique malesuada ultrices ac orci. Nunc mauris ante, euismod non viverra sit amet, consectetur nec dolor. Fusce varius libero vel porta dictum.\r\n\r\nSed sit amet diam ut nisi venenatis fermentum sit amet eu est. Maecenas euismod, magna ut volutpat mollis, velit metus ullamcorper dui, ultrices porttitor dui elit eget lectus. Donec ut est faucibus, pulvinar orci id, scelerisque arcu. Integer eget ultrices lectus, id egestas nibh. Sed eros lectus, vulputate a nisi ac, imperdiet vestibulum tellus. Mauris cursus vulputate ligula. Cras quam turpis, elementum at enim sit amet, luctus dictum sem. Cras ullamcorper commodo condimentum. Pellentesque scelerisque sit amet quam elementum sollicitudin. Maecenas non fringilla quam, sed ultrices nisl. In rhoncus bibendum posuere.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(2,2,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(3,3,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1500,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(4,4,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(5,5,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(6,6,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(7,7,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(8,8,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(9,9,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(10,10,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1500,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(11,11,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(12,12,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png'),(13,13,'Товар','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet luctus sem. In vitae felis quis sem tempus mattis. Suspendisse tempor, velit accumsan elementum consequat, erat erat luctus dui, et ultricies quam leo blandit odio. Aliquam eu est est. In hac habitasse platea dictumst. Pellentesque pellentesque augue sed felis tristique dictum. Donec in tellus et nunc egestas aliquam non et ligula. Vestibulum elit purus, blandit nec orci a, venenatis viverra erat. Morbi condimentum sapien sit amet augue euismod, sit amet vehicula sapien blandit. Nullam venenatis vulputate iaculis. Proin non pellentesque dui, in suscipit odio.\r\n\r\nDonec et felis sem. Suspendisse ultrices semper euismod. Nullam nec semper justo. Fusce vel mi metus. Pellentesque quis consequat felis. Pellentesque habitant morbi tristique senectus et netus et.',1000,1000,1000,0,'http://manprogress.com/styles/images/pages/products-128.png');

            CREATE TABLE `review` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `product_id` int(11) NOT NULL,
              `name` varchar(255) NOT NULL,
              `email` varchar(255) NOT NULL,
              `comment` text NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

            insert  into `review`(`id`,`product_id`,`name`,`email`,`comment`) values (1,1,'barney','barney@144mln.com','sample comment text'),(2,1,'vasiliy','vasiliy@144mln.com','sample comment text'),(3,1,'kolya','kolya@144mln.com','sample comment text');
        ")->execute();
	}

	public function down()
	{
        Yii::app()->db->createCommand("
            DROP TABLE `product`;
            DROP TABLE `review`;
        ")->execute();
	}
}