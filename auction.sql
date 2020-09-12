-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2019 at 08:00 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_group`
--

CREATE TABLE `add_group` (
  `g_id` int(12) NOT NULL,
  `g_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_option`
--

CREATE TABLE `add_option` (
  `id` int(11) NOT NULL,
  `option_name` varchar(55) NOT NULL,
  `op_type` varchar(55) NOT NULL,
  `sort_order` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_aboutus`
--

CREATE TABLE `admin_aboutus` (
  `id` int(12) NOT NULL,
  `ititel` varchar(222) NOT NULL,
  `dimg` text NOT NULL,
  `mtitle` varchar(222) NOT NULL,
  `mdec` text NOT NULL,
  `idate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_aboutus`
--

INSERT INTO `admin_aboutus` (`id`, `ititel`, `dimg`, `mtitle`, `mdec`, `idate`) VALUES
(1, 'asdsad', '<p>asdsad</p>\r\n', '<p>asdsasd</p>\r\n', '<p>asdssad</p>\r\n', '2019-03-22 14:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `custmore_group`
--

CREATE TABLE `custmore_group` (
  `cgroup_id` int(12) NOT NULL,
  `cgroup_name` varchar(222) NOT NULL,
  `default_group` int(11) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_information`
--

CREATE TABLE `delivery_information` (
  `id` int(12) NOT NULL,
  `title` varchar(222) NOT NULL,
  `descripation` text NOT NULL,
  `create_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `tax_name` varchar(222) NOT NULL,
  `tax_price` varchar(222) NOT NULL,
  `tax_per` varchar(222) NOT NULL,
  `user_id` int(12) NOT NULL,
  `tax_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tax_product` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feature_product`
--

CREATE TABLE `feature_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `feature_product` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `order_status_id` int(11) NOT NULL,
  `order_status_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_status_id`, `order_status_name`) VALUES
(2, 'Cancel');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_information`
--

CREATE TABLE `privacy_information` (
  `id` int(12) NOT NULL,
  `p_title` varchar(222) NOT NULL,
  `p_descipation` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy_information`
--

INSERT INTO `privacy_information` (`id`, `p_title`, `p_descipation`, `create_date`) VALUES
(1, 'asdsad', '<p>asdsad</p>\r\n', '2019-03-22 14:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_atr`
--

CREATE TABLE `product_atr` (
  `id` int(11) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `atr_name` varchar(200) NOT NULL,
  `atr_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `review_id` int(12) NOT NULL,
  `product_name` varchar(222) NOT NULL,
  `customre_name` varchar(222) NOT NULL,
  `rating` int(12) NOT NULL,
  `product_status` varchar(222) NOT NULL,
  `comment_review` text NOT NULL,
  `date_add` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rp_information`
--

CREATE TABLE `rp_information` (
  `id` int(12) NOT NULL,
  `rp_title` varchar(222) NOT NULL,
  `rp_descripation` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rp_information`
--

INSERT INTO `rp_information` (`id`, `rp_title`, `rp_descripation`, `create_time`) VALUES
(1, 'asdsad', '<p>asdsa</p>\r\n', '2019-03-22 14:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store_information`
--

CREATE TABLE `store_information` (
  `store_id` int(12) NOT NULL,
  `store_name` varchar(222) NOT NULL,
  `URL` varchar(222) NOT NULL,
  `currency` varchar(222) NOT NULL,
  `meta_tag` varchar(222) NOT NULL,
  `meta_discripation` varchar(222) NOT NULL,
  `store_logo` varchar(222) NOT NULL,
  `store_email` varchar(222) NOT NULL,
  `storemeta_key` varchar(222) NOT NULL,
  `store_address` varchar(222) NOT NULL,
  `g_longtitude` varchar(222) NOT NULL,
  `g_latitude` varchar(222) NOT NULL,
  `store_telephone` varchar(222) NOT NULL,
  `store_fax` varchar(222) NOT NULL,
  `store_comment` text NOT NULL,
  `store_open` varchar(222) NOT NULL,
  `store_country` varchar(222) NOT NULL,
  `store_state` varchar(222) NOT NULL,
  `store_language` varchar(222) NOT NULL,
  `store_centimeter` varchar(222) NOT NULL,
  `store_meter` varchar(222) NOT NULL,
  `store_inch` varchar(222) NOT NULL,
  `store_kilo` varchar(222) NOT NULL,
  `store_gram` varchar(222) NOT NULL,
  `store_pond` varchar(222) NOT NULL,
  `store_miniv` varchar(222) NOT NULL,
  `store_maxv` varchar(222) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_information`
--

INSERT INTO `store_information` (`store_id`, `store_name`, `URL`, `currency`, `meta_tag`, `meta_discripation`, `store_logo`, `store_email`, `storemeta_key`, `store_address`, `g_longtitude`, `g_latitude`, `store_telephone`, `store_fax`, `store_comment`, `store_open`, `store_country`, `store_state`, `store_language`, `store_centimeter`, `store_meter`, `store_inch`, `store_kilo`, `store_gram`, `store_pond`, `store_miniv`, `store_maxv`, `create_date`) VALUES
(1, 'asdsad', 'https://htmlformatter.com/', '', '<p>asdasd</p>\r\n', '<p>asdas</p>\r\n', 'log.png', 'uniyal.amit002@gmail.com', '<p>asdsad</p>\r\n', 'asdsa', 'sdas', 'asdasd', '123213', '2321', '                                                               \r\n                          dvxcvvvxcvxcv                      ', '00:02', 'France', 'sdffsdf', 'German', '23123', '123213', '123123', '213213', '213123', '21312', '123213', '12321', '2019-03-24 06:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `taxt_class`
--

CREATE TABLE `taxt_class` (
  `id` int(11) NOT NULL,
  `taxt_class` varchar(254) DEFAULT NULL,
  `taxt_name` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_class`
--

CREATE TABLE `tax_class` (
  `id` int(11) NOT NULL,
  `tax_class` varchar(254) DEFAULT NULL,
  `tax_name` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax_class_percent`
--

CREATE TABLE `tax_class_percent` (
  `id` int(11) NOT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `persent` varchar(222) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attribute`
--

CREATE TABLE `tbl_attribute` (
  `attribute_id` int(11) NOT NULL,
  `attribute_grp_id` int(11) NOT NULL,
  `attribute_name` varchar(100) NOT NULL,
  `attribute_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attribute_grp`
--

CREATE TABLE `tbl_attribute_grp` (
  `attribute_grp_id` int(11) NOT NULL,
  `attribute_grp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auction_pro`
--

CREATE TABLE `tbl_auction_pro` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `start_price` varchar(100) NOT NULL,
  `hours` varchar(11) NOT NULL,
  `auction_price` varchar(100) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `is_parent` varchar(10) NOT NULL,
  `cat_image` varchar(110) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `cat_status` varchar(100) NOT NULL DEFAULT '1' COMMENT '1=enable,2=disable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `is_parent`, `cat_image`, `sub_cat_id`, `cat_description`, `cat_status`) VALUES
(4, 'men cloth', 'Parent', 't1.jpg', 0, '            fsdfsd', '1'),
(5, 'shat', 'Sub', 'm4.jpg', 0, '            dsfsdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupan`
--

CREATE TABLE `tbl_coupan` (
  `id` int(11) NOT NULL,
  `coupan` varchar(25) NOT NULL,
  `coupan_genrated_date` date NOT NULL,
  `start_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `no_of_coupan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_coupan`
--

INSERT INTO `tbl_coupan` (`id`, `coupan`, `coupan_genrated_date`, `start_date`, `expire_date`, `no_of_coupan`) VALUES
(1, 'UJJF1V3XUA', '2019-03-22', '2019-03-20', '2019-03-06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `currency_id` int(11) NOT NULL,
  `currency_name` varchar(225) DEFAULT NULL,
  `currency_iso` char(3) DEFAULT NULL,
  `currency_status` int(11) DEFAULT '0' COMMENT '0=Yes,1=No',
  `default_currency` int(11) NOT NULL DEFAULT '0' COMMENT '1=default , 0 =not_default'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency_value`
--

CREATE TABLE `tbl_currency_value` (
  `value_id` int(11) NOT NULL,
  `default_currency_id` varchar(100) DEFAULT NULL,
  `related_currency_id` varchar(100) DEFAULT NULL,
  `currency_value` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `id` int(11) NOT NULL,
  `discount_id` int(11) NOT NULL,
  `discount` varchar(123) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount_pro`
--

CREATE TABLE `tbl_discount_pro` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `disc_price` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discount_type`
--

CREATE TABLE `tbl_discount_type` (
  `discount_id` int(11) NOT NULL,
  `discount_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_geo_zones`
--

CREATE TABLE `tbl_geo_zones` (
  `geo_zone_id` int(11) NOT NULL,
  `geo_zone_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_disc`
--

CREATE TABLE `tbl_group_disc` (
  `id` int(11) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `group_id` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_most_view`
--

CREATE TABLE `tbl_most_view` (
  `most_view_id` int(11) NOT NULL,
  `product_id` varchar(11) NOT NULL,
  `ip_address` varchar(222) NOT NULL,
  `total_no` varchar(222) NOT NULL,
  `date_of_view` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_option`
--

CREATE TABLE `tbl_option` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_option_value`
--

CREATE TABLE `tbl_option_value` (
  `option_val_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_val_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_status` varchar(222) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_name` varchar(255) NOT NULL,
  `country_id` varchar(222) NOT NULL,
  `shipping_charge` varchar(222) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `shipping_email` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `apply_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_product`
--

CREATE TABLE `tbl_order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(233) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `option_price` varchar(255) NOT NULL,
  `tax` varchar(222) NOT NULL DEFAULT '0' COMMENT '0=include 1=exclude',
  `option_tax` varchar(255) NOT NULL DEFAULT '0' COMMENT '0=include 1=exclude',
  `sub_total` varchar(244) NOT NULL,
  `apply_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `meta_tag_title` varchar(200) NOT NULL,
  `meta_tag_desc` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT '1=enable,2=disable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_attribute`
--

CREATE TABLE `tbl_product_attribute` (
  `p_attribute_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_details`
--

CREATE TABLE `tbl_product_details` (
  `product_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(150) DEFAULT NULL,
  `product_price` float NOT NULL,
  `model` varchar(150) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `minimum_stock_qty` varchar(150) DEFAULT NULL,
  `tags` varchar(150) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `stock_status_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_image`
--

CREATE TABLE `tbl_product_image` (
  `pimg_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `images` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_tax`
--

CREATE TABLE `tbl_product_tax` (
  `id` int(11) NOT NULL,
  `product_id` varchar(25) NOT NULL,
  `tax_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pro_shipping`
--

CREATE TABLE `tbl_pro_shipping` (
  `id` int(11) NOT NULL,
  `product_id` varchar(23) NOT NULL,
  `require_ship` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_related_pro`
--

CREATE TABLE `tbl_related_pro` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_reasons`
--

CREATE TABLE `tbl_return_reasons` (
  `return_reasons_id` int(11) NOT NULL,
  `return_reasons` varchar(225) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_status`
--

CREATE TABLE `tbl_return_status` (
  `return_status_id` int(11) NOT NULL,
  `return_status_name` varchar(225) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_method_name` varchar(244) NOT NULL,
  `country_id` varchar(222) NOT NULL,
  `shipping_charge` varchar(222) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping_details`
--

CREATE TABLE `tbl_shipping_details` (
  `ship_detail_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `geo_zone_id` int(11) NOT NULL,
  `shipping_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_status`
--

CREATE TABLE `tbl_stock_status` (
  `stock_status_id` int(11) NOT NULL,
  `stock_status` varchar(150) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stock_status`
--

INSERT INTO `tbl_stock_status` (`stock_status_id`, `stock_status`, `product_id`) VALUES
(1, 'In stock', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tc_information`
--

CREATE TABLE `tc_information` (
  `id` int(12) NOT NULL,
  `tc_title` varchar(222) NOT NULL,
  `tc_descripation` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tc_information`
--

INSERT INTO `tc_information` (`id`, `tc_title`, `tc_descripation`, `create_date`) VALUES
(1, 'adssad', '<p>asdssad</p>\r\n', '2019-03-22 14:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `news_letter_subscription` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `street_address` varchar(225) NOT NULL,
  `post_address` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL COMMENT '1=admin,2=user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `group_id`, `username`, `email`, `news_letter_subscription`, `country`, `state`, `city`, `street_address`, `post_address`, `password`, `phone`, `created`, `modified`, `status`) VALUES
(1, 0, 'admin', 'admin@gmail.com', '', 'india', '', '', '', '', '12345', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_module`
--

CREATE TABLE `user_module` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `module_name` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_group`
--
ALTER TABLE `add_group`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `add_option`
--
ALTER TABLE `add_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_aboutus`
--
ALTER TABLE `admin_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custmore_group`
--
ALTER TABLE `custmore_group`
  ADD PRIMARY KEY (`cgroup_id`);

--
-- Indexes for table `delivery_information`
--
ALTER TABLE `delivery_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_product`
--
ALTER TABLE `feature_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`order_status_id`);

--
-- Indexes for table `privacy_information`
--
ALTER TABLE `privacy_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_atr`
--
ALTER TABLE `product_atr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `rp_information`
--
ALTER TABLE `rp_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store_information`
--
ALTER TABLE `store_information`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `taxt_class`
--
ALTER TABLE `taxt_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_class`
--
ALTER TABLE `tax_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_class_percent`
--
ALTER TABLE `tax_class_percent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attribute`
--
ALTER TABLE `tbl_attribute`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `tbl_attribute_grp`
--
ALTER TABLE `tbl_attribute_grp`
  ADD PRIMARY KEY (`attribute_grp_id`);

--
-- Indexes for table `tbl_auction_pro`
--
ALTER TABLE `tbl_auction_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_coupan`
--
ALTER TABLE `tbl_coupan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `tbl_currency_value`
--
ALTER TABLE `tbl_currency_value`
  ADD PRIMARY KEY (`value_id`);

--
-- Indexes for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_discount_pro`
--
ALTER TABLE `tbl_discount_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_discount_type`
--
ALTER TABLE `tbl_discount_type`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `tbl_geo_zones`
--
ALTER TABLE `tbl_geo_zones`
  ADD PRIMARY KEY (`geo_zone_id`);

--
-- Indexes for table `tbl_group_disc`
--
ALTER TABLE `tbl_group_disc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`id`);

--
-- Indexes for table `tbl_most_view`
--
ALTER TABLE `tbl_most_view`
  ADD PRIMARY KEY (`most_view_id`);

--
-- Indexes for table `tbl_option`
--
ALTER TABLE `tbl_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `tbl_option_value`
--
ALTER TABLE `tbl_option_value`
  ADD PRIMARY KEY (`option_val_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_product`
--
ALTER TABLE `tbl_order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_product_attribute`
--
ALTER TABLE `tbl_product_attribute`
  ADD PRIMARY KEY (`p_attribute_id`);

--
-- Indexes for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  ADD PRIMARY KEY (`pimg_id`);

--
-- Indexes for table `tbl_product_tax`
--
ALTER TABLE `tbl_product_tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pro_shipping`
--
ALTER TABLE `tbl_pro_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_related_pro`
--
ALTER TABLE `tbl_related_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_return_reasons`
--
ALTER TABLE `tbl_return_reasons`
  ADD PRIMARY KEY (`return_reasons_id`);

--
-- Indexes for table `tbl_return_status`
--
ALTER TABLE `tbl_return_status`
  ADD PRIMARY KEY (`return_status_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_shipping_details`
--
ALTER TABLE `tbl_shipping_details`
  ADD PRIMARY KEY (`ship_detail_id`);

--
-- Indexes for table `tbl_stock_status`
--
ALTER TABLE `tbl_stock_status`
  ADD PRIMARY KEY (`stock_status_id`);

--
-- Indexes for table `tc_information`
--
ALTER TABLE `tc_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_module`
--
ALTER TABLE `user_module`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_group`
--
ALTER TABLE `add_group`
  MODIFY `g_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `add_option`
--
ALTER TABLE `add_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_aboutus`
--
ALTER TABLE `admin_aboutus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `custmore_group`
--
ALTER TABLE `custmore_group`
  MODIFY `cgroup_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery_information`
--
ALTER TABLE `delivery_information`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feature_product`
--
ALTER TABLE `feature_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `order_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `privacy_information`
--
ALTER TABLE `privacy_information`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_atr`
--
ALTER TABLE `product_atr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `review_id` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rp_information`
--
ALTER TABLE `rp_information`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `store_information`
--
ALTER TABLE `store_information`
  MODIFY `store_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `taxt_class`
--
ALTER TABLE `taxt_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tax_class`
--
ALTER TABLE `tax_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tax_class_percent`
--
ALTER TABLE `tax_class_percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_attribute`
--
ALTER TABLE `tbl_attribute`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_attribute_grp`
--
ALTER TABLE `tbl_attribute_grp`
  MODIFY `attribute_grp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_auction_pro`
--
ALTER TABLE `tbl_auction_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_coupan`
--
ALTER TABLE `tbl_coupan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_currency_value`
--
ALTER TABLE `tbl_currency_value`
  MODIFY `value_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_discount_pro`
--
ALTER TABLE `tbl_discount_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_discount_type`
--
ALTER TABLE `tbl_discount_type`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_geo_zones`
--
ALTER TABLE `tbl_geo_zones`
  MODIFY `geo_zone_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_group_disc`
--
ALTER TABLE `tbl_group_disc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_most_view`
--
ALTER TABLE `tbl_most_view`
  MODIFY `most_view_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_option`
--
ALTER TABLE `tbl_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_option_value`
--
ALTER TABLE `tbl_option_value`
  MODIFY `option_val_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_order_product`
--
ALTER TABLE `tbl_order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product_attribute`
--
ALTER TABLE `tbl_product_attribute`
  MODIFY `p_attribute_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  MODIFY `pimg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product_tax`
--
ALTER TABLE `tbl_product_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pro_shipping`
--
ALTER TABLE `tbl_pro_shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_related_pro`
--
ALTER TABLE `tbl_related_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_return_reasons`
--
ALTER TABLE `tbl_return_reasons`
  MODIFY `return_reasons_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_return_status`
--
ALTER TABLE `tbl_return_status`
  MODIFY `return_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_shipping_details`
--
ALTER TABLE `tbl_shipping_details`
  MODIFY `ship_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_stock_status`
--
ALTER TABLE `tbl_stock_status`
  MODIFY `stock_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tc_information`
--
ALTER TABLE `tc_information`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_module`
--
ALTER TABLE `user_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
