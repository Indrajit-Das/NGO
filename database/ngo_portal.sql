-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 02:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `mission`, `history`, `about_us`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে। সাকার ফিশের পরিচিতি মূলত শহুরে লোকের কাছে। বাড়িতে বা অফিসে রাখা অ্যাকোয়ারিয়ামে রংবেরং এর মাছের মধ্যে কালো শরীরে হলুদ ছোপের এই মাছ দেখা যায় প্রায়ই। অনেকে একে চেনেন অ্যাকোয়ারিয়ামে মাছের ময়লা খেকো মাছ হিসেবে, কারণ শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ। কিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ। কিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে।\r\nএকটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে। সাকার ফিশের পরিচিতি মূলত শহুরে লোকের কাছে। বাড়িতে বা অফিসে রাখা অ্যাকোয়ারিয়ামে রংবেরং এর মাছের মধ্যে কালো শরীরে হলুদ ছোপের এই মাছ দেখা যায় প্রায়ই। অনেকে একে চেনেন অ্যাকোয়ারিয়ামে মাছের ময়লা খেকো মাছ হিসেবে, কারণ শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ। কিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ। কিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে।', 'শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ। কিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ। কিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে।একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে। সাকার ফিশের পরিচিতি মূলত শহুরে লোকের কাছে। বাড়িতে বা অফিসে রাখা অ্যাকোয়ারিয়ামে রংবেরং এর মাছের মধ্যে কালো শরীরে হলুদ ছোপের এই মাছ দেখা যায় প্রায়ই। অনেকে একে চেনেন অ্যাকোয়ারিয়ামে মাছের ময়লা খেকো মাছ হিসেবে, কারণ শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ। কিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ। কিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে।\r\nএকটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে। সাকার ফিশের পরিচিতি মূলত শহুরে লোকের কাছে। বাড়িতে বা অফিসে রাখা অ্যাকোয়ারিয়ামে রংবেরং এর মাছের মধ্যে কালো শরীরে হলুদ ছোপের এই মাছ দেখা যায় প্রায়ই। অনেকে একে চেনেন অ্যাকোয়ারিয়ামে মাছের ময়লা খেকো মাছ হিসেবে, কারণ শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ। কিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ। কিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে।\r\nএকটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে। সাকার ফিশের পরিচিতি মূলত শহুরে লোকের কাছে। বাড়িতে বা অফিসে রাখা অ্যাকোয়ারিয়ামে রংবেরং এর মাছের মধ্যে কালো শরীরে হলুদ ছোপের এই মাছ দেখা যায় প্রায়ই। অনেকে একে চেনেন অ্যাকোয়ারিয়ামে মাছের ময়লা খেকো মাছ হিসেবে, কারণ শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ। কিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ। কিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল। কী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে।', 'বাংলাদেশে সোমবার থেকে সারা দেশে সাতদিনের লকডাউন শুরু হচ্ছে। এ ঘোষণার পর শনিবার দুপুরের পর থেকেই ঢাকা ছাড়তে শুরু করেন মানুষ। রোববারও সকাল থেকে বাস টার্মিনাল, রেল স্টেশন, লঞ্চ ঘাট এবং বিমানবন্দরে ছিল বাড়ি ফিরতি মানুষের ভিড়। এরই মধ্যে লকডাউন বিষয়ক প্রজ্ঞাপন জারি করে বলা হয়েছে, সোমবার সকাল ছ\'টা থেকে বাংলাদেশের সব ধরণের অভ্যন্তরীণ গণপরিবহন - অর্থাৎ ট্রেন, বাস, নৌপথ ও অভ্যন্তরীন বিমান চলাচল বন্ধ্য হয়ে যাবে। সরকার বলছে, লকডাউনের মুখ্য উদ্দেশ্য হবে অবাধ চলাচল নিয়ন্ত্রণ করা ও সভা-সমাবেশ বন্ধ রাখা। কিন্তু লকডাউনের খবর পাওয়ার পর শনিবার দুপুরের পর থেকেই মানুষ বাস ও ট্রেন স্টেশন এবং লঞ্চ টার্মিনালের দিকে ছোটেন।বাংলাদেশে সোমবার থেকে সারা দেশে সাতদিনের লকডাউন শুরু হচ্ছে। এ ঘোষণার পর শনিবার দুপুরের পর থেকেই ঢাকা ছাড়তে শুরু করেন মানুষ। রোববারও সকাল থেকে বাস টার্মিনাল, রেল স্টেশন, লঞ্চ ঘাট এবং বিমানবন্দরে ছিল বাড়ি ফিরতি মানুষের ভিড়। এরই মধ্যে লকডাউন বিষয়ক প্রজ্ঞাপন জারি করে বলা হয়েছে, সোমবার সকাল ছ\'টা থেকে বাংলাদেশের সব ধরণের অভ্যন্তরীণ গণপরিবহন - অর্থাৎ ট্রেন, বাস, নৌপথ ও অভ্যন্তরীন বিমান চলাচল বন্ধ্য হয়ে যাবে। সরকার বলছে, লকডাউনের মুখ্য উদ্দেশ্য হবে অবাধ চলাচল নিয়ন্ত্রণ করা ও সভা-সমাবেশ বন্ধ রাখা। কিন্তু লকডাউনের খবর পাওয়ার পর শনিবার দুপুরের পর থেকেই মানুষ বাস ও ট্রেন স্টেশন এবং লঞ্চ টার্মিনালের দিকে ছোটেন।', NULL, NULL, '2021-04-04 04:35:24', '2021-04-04 04:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `about_tables`
--

CREATE TABLE `about_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_tables`
--

INSERT INTO `about_tables` (`id`, `mission`, `vision`, `about_us`, `ngo_id`, `created_at`, `updated_at`) VALUES
(1, 'সোমবার সকাল ৬টা থেকে ১১ই এপ্রিল রাত ১২টা পর্যন্ত এই লকডাউন ঘোষণা করেছে বাংলাদেশের সরকার। এই সময় সকল প্রকার পরিবহন, জরুরি সেবা ছাড়া অফিস, শপিংমল ইত্যাদি বন্ধ থাকবে।\r\nরবিবার দুপুরে সংসদ অধিবেশনে দেয়া ভাষণে শেখ হাসিনা বলেন, \"করোনার দ্বিতীয় ঢেউ চলছে। এটি সামলাতে সবাইকে এগিয়ে আসতে হবে।\"\r\nআগে বয়স্করা সংক্রমিত হতো কিন্তু এখন তরুণ ও শিশুরা সবাই আক্রান্ত হচ্ছে উল্লেখ করে তিনি বলেন, \"দ্বিতীয় ঢেউ সামলাতে মানুষের কিছুটা সমস্যা হবে। কিন্তু তারপরও জীবনটা অনেক বড়। জীবনটা আগে। মানুষের জীবন বাঁচাতে হবে\"।\r\nতিনি বক্তব্যে বিয়ে-শাদি, অনুষ্ঠান সম্পূর্ণ বন্ধ, ভিড়ের জায়গা এড়িয়ে চলা, পর্যটন ও অবাধে চলাফেরা বন্ধ করার নির্দেশনাও দিয়েছেন।\r\nতার মধ্যেই বইমেলার মতো একটি বড় আয়োজন খোলা থাকার সিদ্ধান্ত এলো।', 'রবিবার দুপুরে সংসদ অধিবেশনে দেয়া ভাষণে শেখ হাসিনা বলেন, \"করোনার দ্বিতীয় ঢেউ চলছে। এটি সামলাতে সবাইকে এগিয়ে আসতে হবে।\"\r\nআগে বয়স্করা সংক্রমিত হতো কিন্তু এখন তরুণ ও শিশুরা সবাই আক্রান্ত হচ্ছে উল্লেখ করে তিনি বলেন, \"দ্বিতীয় ঢেউ সামলাতে মানুষের কিছুটা সমস্যা হবে। কিন্তু তারপরও জীবনটা অনেক বড়। জীবনটা আগে। মানুষের জীবন বাঁচাতে হবে\"।\r\nতিনি বক্তব্যে বিয়ে-শাদি, অনুষ্ঠান সম্পূর্ণ বন্ধ, ভিড়ের জায়গা এড়িয়ে চলা, পর্যটন ও অবাধে চলাফেরা বন্ধ করার নির্দেশনাও দিয়েছেন।\r\nতার মধ্যেই বইমেলার মতো একটি বড় আয়োজন খোলা থাকার সিদ্ধান্ত এলো।', 'অধিবেশনে দেয়া ভাষণে শেখ হাসিনা বলেন, \"করোনার দ্বিতীয় ঢেউ চলছে। এটি সামলাতে সবাইকে এগিয়ে আসতে হবে।\"\r\nআগে বয়স্করা সংক্রমিত হতো কিন্তু এখন তরুণ ও শিশুরা সবাই আক্রান্ত হচ্ছে উল্লেখ করে তিনি বলেন, \"দ্বিতীয় ঢেউ সামলাতে মানুষের কিছুটা সমস্যা হবে। কিন্তু তারপরও জীবনটা অনেক বড়। জীবনটা আগে। মানুষের জীবন বাঁচাতে হবে\"।\r\nঅধিবেশনে দেয়া ভাষণে শেখ হাসিনা বলেন, \"করোনার দ্বিতীয় ঢেউ চলছে। এটি সামলাতে সবাইকে এগিয়ে আসতে হবে।\"\r\nআগে বয়স্করা সংক্রমিত হতো কিন্তু এখন তরুণ ও শিশুরা সবাই আক্রান্ত হচ্ছে উল্লেখ করে তিনি বলেন, \"দ্বিতীয় ঢেউ সামলাতে মানুষের কিছুটা সমস্যা হবে। কিন্তু তারপরও জীবনটা অনেক বড়। জীবনটা আগে। মানুষের জীবন বাঁচাতে হবে\"।', 1, '2021-04-04 05:11:01', '2021-04-04 05:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_no` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `join_date` date NOT NULL,
  `leave_date` date DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `title`, `order_no`, `name`, `designation`, `message`, `image`, `phone`, `telephone`, `email`, `status`, `join_date`, `leave_date`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'জেলা প্রশাসক', 1, 'মোঃ শহীদুল ইসলাম|', 'বাগেরহাট', 'বাগেরহাট', '1618301746_Albert_Einstein_Head.jpg', '015254524585', '12121545215', 'dsf@gmail.com', 'active', '2021-04-04', NULL, 'Admin', 'Admin', '2021-04-04 04:17:48', '2021-04-13 02:15:46'),
(2, 'শাখা কর্মকর্তা', 2, 'কে. এম. ইশমাম', 'বাগেরহাট', 'বাংলাদেশে বিক্ষোভ নিয়ন্ত্রণে প্রায়ই এই ঘাটতি দেখা যায় মি. সাঈদ। বিক্ষোভ সামলাতে পুলিশ এক পর্যায়ে গুলি চালায়। কিন্তু গুলি কেন? হয়তো বিক্ষোভ নিয়ন্ত্রণে তাদের দক্ষতার অভাব আছে, হয়তবা পর্যাপ্ত প্রশিক্ষণ দেয়া হয় না, হয়তো যে লোকবল নিয়োগ করা হয় তারা এ\'ধরণের কাজের জন্য উপযুক্ত নন, হয়তো ঢাকার বাইরে কোথাও পর্যাপ্ত সংখ্যায় পুলিশ নেই। কারণ যাই হোক, এটা অনস্বীকার্য যে বাংলাদেশ সরকারকে একটি পথ বের করতেই হবে, যেখানে শান্তিপূর্ণ বিক্ষোভের অধিকার সমুন্নত রাখা হবে, এবং পুলিশ কোন প্রাণহানি না ঘটিয়ে এমনকি মারমুখী বিক্ষোভও নিয়ন্ত্রণ করতে পারবে।', '1617531589_Men-Profile-Image-715x657.png', '+880130365858', '6542315511254', 'bdc.d45haka@brac.net', 'active', '2021-04-04', NULL, 'Admin', NULL, '2021-04-04 04:19:49', '2021-04-04 04:19:56'),
(3, 'শো করলেন মমতা', 1, 'অমিত শাহ|', 'শো করলেন মমতা শো করলেন মমতা', 'শো করলেন মমতা শো করলেন মমতা', '1618215292_51L--KMbvsL._SL1000_.jpg', '0123256585', '256541215', 'amit@gmail.com', 'inactive', '2021-04-12', NULL, 'Admin', 'Admin', '2021-04-12 02:14:52', '2021-04-12 02:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `telephone`, `email`, `fax`, `address`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '+88045324533', '63698525', 'admin@gmail.com', '88 02 2222', '75 Mohakhali, Dhaka-1212, Bangladesh', 'Admin', NULL, '2021-04-04 05:04:56', '2021-04-04 05:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `ngo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `phone`, `email`, `photo`, `status`, `ngo_id`, `created_at`, `updated_at`) VALUES
(1, 'Hollee Talley', 'Fuga Culpa odio imp', '+1 (844) 916-1069', 'wuki@mailinator.com', '1617535224_Albert_Einstein_Head.jpg', 'active', 1, '2021-04-04 05:20:24', '2021-04-04 05:21:04'),
(2, 'Blaine Brewer', 'Facilis minim est a', '+1 (237) 195-7246', 'jisivoraxo@mailinator.com', '1617535235_97685922-green-earth-of-eco-friendly-city-and-urban-forest-landscape-abstract-background-renewable-energy-for.jpg', 'active', 1, '2021-04-04 05:20:35', '2021-04-04 05:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `frontend_logo_and_name_settings`
--

CREATE TABLE `frontend_logo_and_name_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_logo_and_name_settings`
--

INSERT INTO `frontend_logo_and_name_settings` (`id`, `logo`, `name`, `created_at`, `updated_at`) VALUES
(1, '1618315873_gov.png', 'বাগেরহাট জেলা এনজিও পোর্টাল!!!', '2021-04-13 05:28:51', '2021-04-13 06:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `governing_members`
--

CREATE TABLE `governing_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_image_videos`
--

CREATE TABLE `main_image_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ofType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_image_videos`
--

INSERT INTO `main_image_videos` (`id`, `src`, `ofType`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/embed/v1R-CB3e-pw', 'video', 'active', 'Admin', NULL, '2021-04-12 02:19:25', '2021-04-12 02:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2021_03_13_041557_create_sessions_table', 1),
(30, '2021_03_14_041336_create_notices_table', 1),
(31, '2021_03_14_041404_create_services_table', 1),
(32, '2021_03_14_041424_create_service_details_table', 1),
(33, '2021_03_14_041525_create_ngo_executive_committees_table', 1),
(35, '2021_03_14_041600_create_ngos_table', 1),
(36, '2021_03_14_041621_create_abouts_table', 1),
(37, '2021_03_14_054204_create_contacts_table', 1),
(38, '2021_03_18_095729_create_administrators_table', 1),
(39, '2021_03_20_044328_create_main_image_videos_table', 1),
(40, '2021_03_21_050241_create_our_responsibilities_table', 1),
(41, '2021_03_24_111248_create_governing_members_table', 1),
(42, '2021_03_24_111349_create_about_tables_table', 1),
(43, '2021_03_24_111714_create_officers_table', 1),
(44, '2021_03_24_111735_create_employees_table', 1),
(45, '2021_03_24_111751_create_projects_table', 1),
(46, '2021_04_01_075017_create_slider_images_table', 1),
(47, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(48, '2021_03_14_041546_create_photo_galleries_table', 2),
(49, '2021_04_06_095422_create_ngo_notifications_table', 3),
(64, '2021_04_06_101557_create_ngo_seens_table', 4),
(71, '2021_04_11_055923_create_scheduled_activities_table', 5),
(72, '2021_04_13_102937_create_frontend_logo_and_name_settings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ngos`
--

CREATE TABLE `ngos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `english_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangla_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberOfEmployees` int(11) DEFAULT NULL,
  `regNo` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngos`
--

INSERT INTO `ngos` (`id`, `logo`, `english_name`, `bangla_name`, `address`, `telephone`, `phone`, `fax`, `email`, `webAddress`, `numberOfEmployees`, `regNo`, `status`, `user_id`, `created_by`, `updated_by`, `slug`, `created_at`, `updated_at`) VALUES
(1, '1618309508_brac-logo.png', 'BRAC', 'ব্র্যাক', 'BRAC Centre, 75 Mohakhali, Dhaka-1212, BRAC Centre, 75 Mohakhali, Dhaka-1212,BRAC Centre, 75 Mohakhali, Dhaka-1212,Bangladesh', NULL, '+8801303653859545', '88 02 2222', 'brac@gmail.com', 'brac.net', 212, 1617534139, 'active', 2, 'Admin', NULL, 'brac', '2021-04-04 05:02:19', '2021-04-13 04:25:08'),
(2, '1617534228_download.png', 'Marie Stopes Banglade', 'মেরী স্টোপস বাংলাদেশ', 'House# 6/2, Block - F, Lalmatia Housing Estate, Dhaka-1207', '354689744', '+88012213653859', '454533221', 'marie@gmail.com', 'marie.net', NULL, 1617534228, 'active', 3, 'Admin', NULL, 'marie-stopes-bangladesh', '2021-04-04 05:03:48', '2021-04-12 01:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_executive_committees`
--

CREATE TABLE `ngo_executive_committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_no` int(11) NOT NULL,
  `title_in_committee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngo_executive_committees`
--

INSERT INTO `ngo_executive_committees` (`id`, `name`, `organization`, `order_no`, `title_in_committee`, `phone`, `email`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'জনাব মো: শহীদুল ইসলাম', 'জেলা প্রশাসকের কার্যালয়,বাগেরহাট', 1, 'উপদেষ্টা', '+88013036538', 'bdc.dhaka345@brac.net', 'Admin', NULL, '2021-04-04 04:31:06', '2021-04-04 04:31:06'),
(2, 'জনাব মো: মমিন উদ্দিন', 'জেলা প্রশাসকের কার্যালয়,বাগেরহাট', 2, 'আহবায়ক', '+880130253859', 'ajskd@gmail.com', 'Admin', NULL, '2021-04-04 04:31:50', '2021-04-04 04:31:50'),
(3, 'জনাব কে. এম ইশমাম', 'জেলা প্রশাসকের কার্যালয়,বাগেরহাট', 3, 'সদস্য সচিব', '02321541212', 'kjjk@gmail.com', 'Admin', NULL, '2021-04-04 04:32:35', '2021-04-04 04:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `ngo_seens`
--

CREATE TABLE `ngo_seens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ngo_id` bigint(20) UNSIGNED NOT NULL,
  `notice_id` bigint(20) UNSIGNED NOT NULL,
  `seen_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ngo_seens`
--

INSERT INTO `ngo_seens` (`id`, `ngo_id`, `notice_id`, `seen_at`, `comment`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 1, 18, '2021-04-11 05:12:50 am', NULL, NULL, 'BRAC', '2021-04-10 23:12:50', '2021-04-10 23:12:50'),
(7, 2, 19, '2021-04-11 06:47:51 am', NULL, NULL, 'Marie Stopes Bangladesh', '2021-04-11 00:47:51', '2021-04-11 00:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `notice`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(18, 'দম বন্ধ হয়ে মারা গেছে ৪২০০ টন স্যামন', 'দক্ষিণ আমেরিকার দেশ চিলিতে ঘাতক শ্যাওলায় ঢাকা পড়ে ৪ হাজার ২০০ টন স্যামন মাছ মারা গেছে। দেশটির ফিসারিজ ও অ্যাকুয়াকালচার সার্ভিস এ কথা জানায়। বিশ্বের দ্বিতীয় বৃহত্তম স্যামন উৎপাদনকারী দেশে এমন গণমৃত্যু ঘটল।\r\n\r\nক্ষতিকর শ্যাওলার আস্তরণে ঢাকা পড়ে পানিতে অক্সিজেনের মাত্রা কমে যাওয়ায় দম বন্ধ হয়ে মাছগুলো মারা গেছে বলে ধারণা করা হচ্ছে। চিলির চেয়ে কেবল নরওয়ে সবচেয়ে বেশি স্যামন মাছ উৎপাদন করে। ২০২০ সালে দেশটি ৪.৪ বিলিয়ন ডলারের স্যামন রফতানি করেছে।\r\nএকই কারণে ২০১৬', 'active', 'Admin', NULL, '2021-04-10 23:06:56', '2021-04-10 23:08:09'),
(19, 'মিয়ানমারে একদিনে এক শহরেই ৮০ জনের বেশি নিহত', 'মিয়ানমারের বাগো শহরে বিক্ষোভকারীদের ওপর নিরাপত্তা বাহিনীর চালানো ক্র্যাকডাউনে ৮০ জনেরও বেশি মানুষ মারা গেছেন বলে আন্দোলনকারীরা জানিয়েছেন।\r\n\r\nনিহতদের মরদেহ সেনাবাহিনী নিয়ে গেছে বলে জানা গেছে এবং মৃত্যুর প্রকৃত সংখ্যা হয়তো কখনও সঠিকভাবে জানা যাবে না। প্রত্যক্ষদর্শীরা দেশটির গণমাধ্যমকে বলেছেন, সৈন্যরা ভারী অস্ত্র ব্যবহার করছিল এবং নড়াচড়া করে এমন যেকোনো কিছুর ওপরই গুলি চালিয়েছে।', 'active', 'Admin', NULL, '2021-04-10 23:07:20', '2021-04-10 23:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `ngo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `name`, `designation`, `phone`, `email`, `photo`, `status`, `ngo_id`, `created_at`, `updated_at`) VALUES
(1, 'Katelyn Duncan', 'Voluptas dolore inci', '+1 (675) 585-9817', 'nojyz@mailinator.com', '1617535246_51L--KMbvsL._SL1000_.jpg', 'active', 1, '2021-04-04 05:20:46', '2021-04-04 05:21:09'),
(2, 'Chaim Hays', 'Quod consequuntur op', '+1 (956) 354-7022', 'myjepoziq@mailinator.com', '1617535256_97685922-green-earth-of-eco-friendly-city-and-urban-forest-landscape-abstract-background-renewable-energy-for.jpg', 'active', 1, '2021-04-04 05:20:56', '2021-04-04 05:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `our_responsibilities`
--

CREATE TABLE `our_responsibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `responsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_responsibilities`
--

INSERT INTO `our_responsibilities` (`id`, `responsi`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশে সাকার ফিশের পরিচিতি মূলত শহুরে লোকের কাছে। বাড়িতে বা অফিসে রাখা অ্যাকোয়ারিয়ামে রংবেরং এর মাছের মধ্যে কালো শরীরে হলুদ ছোপের এই মাছ দেখা যায় প্রায়ই।\r\nঅনেকে একে চেনেন অ্যাকোয়ারিয়ামে মাছের ময়লা খেকো মাছ হিসেবে, কারণ শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ।\r\nকিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ।\r\nকিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল।\r\nকী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে। সাকার ফিশের পরিচিতি মূলত শহুরে লোকের কাছে। বাড়িতে বা অফিসে রাখা অ্যাকোয়ারিয়ামে রংবেরং এর মাছের মধ্যে কালো শরীরে হলুদ ছোপের এই মাছ দেখা যায় প্রায়ই।\r\nঅনেকে একে চেনেন অ্যাকোয়ারিয়ামে মাছের ময়লা খেকো মাছ হিসেবে, কারণ শোভা বর্ধনের পাশাপাশি মাছের বর্জ্য এবং অ্যাকোয়ারিয়ামের অন্যান্য ময়লা খেয়ে ফেলে এই মাছ।\r\nকিন্তু গত কয়েক বছর ধরে দেশের বিভিন্ন অঞ্চলে উন্মুক্ত জলাশয়ে পাওয়া যাচ্ছে এই মাছ।\r\nকিছুদিন আগে ঢাকায় জাতীয় জাদুঘরের পেছনের পুকুরে বড় আকারের একটি সাকার ফিশ পাওয়া গেছে বলে খবর প্রকাশিত হয়েছিল।\r\nকী করে শখের মাছ পালনকারীদের অ্যাকোয়ারিয়াম থেকে মুক্ত জলাশয়ে ছড়িয়ে পড়লো এই মাছ তা স্পষ্ট নয় এখন পর্যন্ত, কিন্তু এরই মধ্যে এই মাছ জলাশয়ের মাছ চাষীদের মাথা ব্যথার কারণ হয়ে দাঁড়িয়েছে।', 'Admin', 'Admin', '2021-04-04 04:35:18', '2021-04-04 04:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$ewXyafNxkLwKLm9XqXUcIe744/hBiXwowX8ytiSI6BtCRUJYX/bNK', '2021-04-05 00:45:53'),
('indrojit70@gmail.com', '$2y$10$Aaim6VE/x/k0V4VBg0w4iuCmCa.5cM3QH2UcaVOUD0JlcurbxjLOa', '2021-04-05 01:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `user_id` int(11) NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_galleries`
--

INSERT INTO `photo_galleries` (`id`, `title`, `description`, `photo`, `status`, `user_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'গৃহপালিত প্রাণী', 'বাংলাদেশ এর গৃহপালিত পশু অনেক জাইগাই দেখা জাই ।', '[\"1617687213_1200px-Bunter_Hahn_Altenglischer_Zwergk\\u00e4mpfer.jpg\",\"1617687213_2200px-Freilichtmuseum_-_Lippegans_(3).jpg\",\"1617687213_3200px-Golden_retriever_stehfoto.jpg\",\"1617687214_4200px-Mainecoonbrowntabby.jpg\",\"1617687214_5250px-Ewe_and_lamb_taken_at_the_NCSU_Small_Ruminant_Educational_Unit.jpg\",\"1617687214_6e2a6fd2367a41d7dbb7d7848df29aefd.jpg\",\"1617687214_7Taureau_Charolais_(Ch\\u00e2teau-Chinon,_Morvan).jpg\"]', 'active', 1, 'Admin', NULL, '2021-04-05 23:33:34', '2021-04-05 23:34:02'),
(3, 'ফল', 'বাংলাদেশ এর যেসব ফল সব জাইগায় পাওয়া যায় তাদের তালিকা এখানে দেওয়া হল ।', '[\"1617690670_1images (1).jpg\",\"1617690670_2photo-1550258987-190a2d41a8ba.jpg\",\"1617690670_3X7g6v2l.jpg\"]', 'active', 2, 'BRAC', 'BRAC', '2021-04-06 00:30:48', '2021-04-06 01:13:34'),
(4, 'বাংলাদেশের প্রাতিকিক সৌন্দর্য', 'বাংলাদেশের প্রকৃতি অনেক সুন্দর ও মনরম', '[\"1617695787_13b1cfaff4adbaa3aa4d781bc25dde452.jpg\",\"1617695787_21131206.jpg\",\"1617695787_3e4de5ae02763bdae2cbb81935504519b.jpg\",\"1617695787_4images.jpg\",\"1617695787_5pexels-photo-257360.jpeg\",\"1617695787_6tree-276014__340.webp\",\"1617695787_7unnamed.jpg\"]', 'active', 2, 'BRAC', NULL, '2021-04-06 01:56:27', '2021-04-06 01:56:39'),
(5, 'টেলিভিশনে প্রাথমিকের পাঠদান শুরু', 'প্রথম থেকে পঞ্চম শ্রেণির পাঠদান কার্যক্রম শুরু হয়েছে বাংলাদেশ টেলিভিশনে। সোমবার (৫ এপ্রিল) থেকে ৮ এপ্রিল পর্যন্ত এই পাঠদান কার্যক্রমের সূচি প্রকাশ করেছে প্রাথমিক শিক্ষা অধিদফতর।\r\n\r\nপ্রাথমিকের এ পাঠদান সূচিতে প্রথম দিন সোমবার (৫ এপ্রিল) প্রথম শ্রেণির বাংলা বিকাল সোয়া ৪টা থেকে ৪টা ৩৫ মিনিট, দ্বিতীয় শ্রেণির ইংরেজি বিকাল ৪টা ৩৫ মিনিট থেকে ৪টা ৫৫ মিনিট এবং তৃতীয় শ্রেণির প্রাথমিক বিজ্ঞান বিকাল ৪টা ৫৫ মিনিট থেকে বিকাল সোয়া ৫টা পর্যন্ত অনুষ্ঠিত হয়েছে।\r\n\r\nমঙ্গলবার (৬ এপ্রিল) প্রথম শ্রেণির বাংলা বিকাল সোয়া ৪টা থেকে ৪টা ৩৫ মিনিট, তৃতীয় শ্রেণির ইংরেজি বিকাল ৪টা ৩৫ মিনিট থেকে ৪টা ৫৫ মিনিট এবং চতুর্থ শ্রেণির প্রাথমিক বিজ্ঞান বিকাল ৪টা ৫৫ মিনিট থেকে সোয়া ৫টা পর্যন্ত অনুষ্ঠিত হবে।', '[\"1618206838_1education (1).jpg\",\"1618206838_2education.jpg\",\"1618206838_3gettyimages-1000887536-612x612.jpg\",\"1618206838_4gettyimages-1007214476-612x612.jpg\",\"1618206838_5school-students-thailand-e1537240601841-1024x586.jpg\",\"1618206838_6shutterstock167785193resized.jpg\",\"1618206838_7teach.jpg\",\"1618206838_8UNIPH2019008.jpg\"]', 'active', 3, 'Marie Stopes Bangladesh', NULL, '2021-04-11 23:53:58', '2021-04-11 23:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeOfProject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberOfGroup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directBeneficiaries` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indirectBeneficiaries` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workingSector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workProcessExplain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dncc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dscc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workingArea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngo_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upcoming',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `donor`, `typeOfProject`, `startDate`, `endDate`, `budget`, `numberOfGroup`, `directBeneficiaries`, `indirectBeneficiaries`, `workingSector`, `workProcessExplain`, `dncc`, `dscc`, `workingArea`, `ngo_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Knox Carney', '15', 'Sapiente tempore ni', '1992-08-20', '1972-07-20', '50', '51', 'Est doloremque dolor', 'Quas placeat enim e', 'Sunt ratione dolorem', 'Odio veritatis paria', 'Rem repellendus Nob', 'Facere aliquid quis', 'Et inventore fugit', 1, 'upcoming', '2021-04-04 05:30:38', '2021-04-06 03:26:09'),
(2, 'Quail Garner', '2', 'Error porro deleniti', '1987-08-19', '2012-05-24', '74', '365', 'Voluptate dolorem in', 'Aut exercitation dol', 'Veniam est est sunt', 'Odio voluptates dolo', 'Id aperiam eos aliqu', 'Aut ut adipisicing d', 'Consequatur dicta om', 1, 'running', '2021-04-04 05:30:41', '2021-04-06 03:26:10'),
(3, 'Hunter Marks', '82', 'Excepteur voluptatem', '1992-08-11', '2000-04-04', '99', '592', 'Praesentium odit ill', 'Doloremque sint rec', 'Officiis ad esse non', 'Est ipsam beatae co', 'Ipsa in repudiandae', 'Sapiente ad molestia', 'Fuga Sit ad labore', 1, 'completed', '2021-04-04 05:30:44', '2021-04-06 03:26:29'),
(4, 'sdfa', '5', 'educational', '2021-04-15', '2021-04-30', '650000', '7', 'sdfjzhn,mn', 'jhxzjfkgdf', 'fkljkxljnv', 'j kjdsahfkjhasdlkfjh kjasdfhkjsaldfh kjsadfhak;lsdjfhjkdsafh sadkfj sdkjfaskdljfhljksadfh ksjdfh lskadjfhkjsadfhjaskdf sadkjfhsadkjfhalskdjfhsalkjdf ksjdfhalsdkjfh aslkjd fsakdjfhsadkf ksjdfhaslkdjf', 'xv212', '122xcvv', 'lkjfdklgj', 2, 'upcoming', '2021-04-11 23:45:17', '2021-04-11 23:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_activities`
--

CREATE TABLE `scheduled_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ngo_id` bigint(20) UNSIGNED NOT NULL,
  `activity_date` date NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mark_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scheduled_activities`
--

INSERT INTO `scheduled_activities` (`id`, `ngo_id`, `activity_date`, `title`, `description`, `comment`, `mark_grade`, `created_at`, `updated_at`) VALUES
(2, 1, '2021-04-11', 'সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর', 'সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর', 'valo hoin ni সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর\r\nসততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রীর', 'B-', '2021-04-11 02:53:57', '2021-04-11 04:05:51'),
(3, 1, '2021-04-09', 'ওয়াশিংটন বিশ্ববিদ্যালয় এবং ফ্রেড হাচিনসন ক্যান্সার রিসা', 'র্চ সেন্টারের ভাইরাস বিশেষজ্ঞ ট্রেভর বেডফোর্ড বলেছেন, শুধু সিক্যুয়েন্সিংয়ের মাধ্যমেই এই ব্যক্তিদের শনাক্ত করা হয়েছে। তিনি বলেন, বসন্তে সংক্রমণ  বাড়বে। এপ্রিল বা মে নাগাদ সংক্রমণ বাড়তে পারে। তবে আমি এখনও মনে করি যে, গ্রীষ্মে পরিস্থিতি নিয়ন্ত্রণে আসবে এবং তখন খুব কমই ভাইরাস সংক্রমণের ঘটনা ঘটবে।', NULL, NULL, '2021-04-11 04:17:40', '2021-04-11 04:17:40'),
(4, 1, '2021-04-08', 'গৃহপালিত প্রাণী', 'গৃহপালিত প্রাণী গৃহপালিত প্রাণী গৃহপালিত প্রাণী গৃহপালিত প্রাণী গৃহপালিত প্রাণী', NULL, NULL, '2021-04-11 04:25:32', '2021-04-11 04:25:32'),
(5, 1, '2021-04-13', 'ওয়াশিংটন বিশ্ববিদ্যালয় এবং ফ্রেড হাচিনসন ক্যাসংক্রমণের ঘটনা ঘটবে।', 'ওয়াশিংটন বিশ্ববিদ্যালয় এবং ফ্রেড হাচিনসন ক্যাসংক্রমণের ঘটনা ঘটবে। ওয়াশিংটন বিশ্ববিদ্যালয় এবং ফ্রেড হাচিনসন ক্যাসংক্রমণের ঘটনা ঘটবে।', NULL, NULL, '2021-04-11 04:27:08', '2021-04-11 04:27:08'),
(6, 1, '2021-04-05', 'সততার সঙ্গে দায়িত্ব পালনের আহ্বান প্রধানমন্ত্রী', 'ওয়াশিংটন বিশ্ববিদ্যালয় এবং ফ্রেড হাচিনসন ক্যাসংক্রমণের ঘটনা ঘটবে। ওয়াশিংটন বিশ্ববিদ্যালয় এবং ফ্রেড হাচিনসন ক্যাসংক্রমণের ঘটনা ঘটবে।', NULL, NULL, '2021-04-11 04:27:43', '2021-04-11 04:27:43'),
(7, 2, '2021-04-12', 'ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই', 'ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই  ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই  ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই', NULL, NULL, '2021-04-11 06:10:33', '2021-04-11 06:10:33'),
(8, 2, '2021-04-13', 'ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই', 'ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই ভারতের সঙ্গে ৭ সমঝোতা স্মারক সই', 'j,hdgf,jasf,ij', 'A+', '2021-04-11 06:22:07', '2021-04-12 01:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_no` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `order_no`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'নাগরিক সেবা', 1, 'active', 'Admin', 'Admin', '2021-04-04 04:13:16', '2021-04-12 02:20:52'),
(2, 'নিরাপত্তা ও শৃংখলা', 2, 'active', 'Admin', NULL, '2021-04-04 04:13:26', '2021-04-04 04:14:36'),
(3, 'কর্মসম্পাদন ব্যবস্থাপনা', 3, 'active', 'Admin', NULL, '2021-04-04 04:13:38', '2021-04-04 04:14:38'),
(4, 'পর্যটন ও ঐতিহ্য', 4, 'active', 'Admin', NULL, '2021-04-04 04:13:50', '2021-04-04 04:14:39'),
(5, 'স্বাস্থ্য সেবা', 5, 'active', 'Admin', NULL, '2021-04-04 04:14:04', '2021-04-04 04:14:46'),
(6, 'জরুরী কল সেবা', 6, 'active', 'Admin', NULL, '2021-04-04 04:14:13', '2021-04-04 04:14:48'),
(7, 'অভিযোগ প্রতিকার ব্যবস্থা', 7, 'active', 'Admin', NULL, '2021-04-04 04:14:23', '2021-04-04 04:14:49'),
(8, 'বিবিধ সেবা', 8, 'active', 'Admin', NULL, '2021-04-04 04:14:30', '2021-04-04 04:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `icon_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_no` int(11) DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `service_id`, `title`, `status`, `icon_color`, `order_no`, `link`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'সেবা প্রদান প্রতিশ্রুতির অনুমোদিত ফরম্যাট', 'active', NULL, 1, 'https://stackoverflow.com/questions/19325312/how-to-create-multiple-where-clause-query-using-laravel-eloquent', 'Admin', 'Admin', '2021-04-04 04:15:18', '2021-04-06 03:01:32'),
(2, 1, 'সেবা প্রদান প্রতিশ্রুতি (সিটিজেন্‌স চার্টার)', 'active', NULL, 1, '', 'Admin', NULL, '2021-04-04 04:15:28', '2021-04-04 04:20:50'),
(3, 1, 'সেবা প্রদান প্রতিশ্রুতি প্রণয়ন সংক্রান্ত নির্দেশিকা', 'active', NULL, 1, '', 'Admin', NULL, '2021-04-04 04:15:40', '2021-04-04 04:20:52'),
(4, 2, 'হটলাইন', 'active', NULL, 2, 'https://stackoverflow.com/questions/19325312/how-to-create-multiple-where-clause-query-using-laravel-eloquent', 'Admin', 'Admin', '2021-04-04 04:15:56', '2021-04-06 02:57:51'),
(5, 2, 'মোবাইল কোর্ট সংক্রান্ত', 'active', NULL, 2, '', 'Admin', NULL, '2021-04-04 04:16:06', '2021-04-04 04:20:54'),
(6, 2, 'ঢাকার থানাসমূহ', 'active', NULL, 2, '', 'Admin', NULL, '2021-04-04 04:16:36', '2021-04-04 04:20:56'),
(7, 3, 'পরিপত্র/নীতিমালা', 'active', NULL, 3, '', 'Admin', NULL, '2021-04-04 04:16:53', '2021-04-04 04:20:57'),
(8, 3, 'চুক্তিসমূহ', 'active', NULL, 3, '', 'Admin', NULL, '2021-04-04 04:17:05', '2021-04-04 04:20:58'),
(9, 3, 'চুক্তির কাঠামো', 'active', NULL, 3, '', 'Admin', NULL, '2021-04-04 04:17:16', '2021-04-04 04:20:59'),
(10, 4, 'দর্শনীয় স্থান', 'active', NULL, 4, '', 'Admin', NULL, '2021-04-04 04:17:33', '2021-04-04 04:21:01'),
(11, 4, 'জেলার ঐতিহ্য', 'active', NULL, 4, '', 'Admin', NULL, '2021-04-04 04:17:49', '2021-04-04 04:21:04'),
(12, 4, 'হোটেল ও আবাসন সংক্রান্ত', 'active', NULL, 4, '', 'Admin', NULL, '2021-04-04 04:18:00', '2021-04-04 04:21:06'),
(13, 5, 'ফ্রি চিকিৎসার হটলাইন', 'active', NULL, 5, '', 'Admin', NULL, '2021-04-04 04:18:16', '2021-04-04 04:21:08'),
(14, 5, 'হাসপাতাল ও ক্লিনিক', 'active', NULL, 5, '', 'Admin', NULL, '2021-04-04 04:18:27', '2021-04-04 04:21:09'),
(15, 5, 'স্বাস্থ্য অধিদপ্তর', 'active', NULL, 5, '', 'Admin', NULL, '2021-04-04 04:18:43', '2021-04-04 04:21:11'),
(16, 6, '৩৩৩ থেকে তথ্য-সেবা', 'active', NULL, 6, '', 'Admin', NULL, '2021-04-04 04:19:01', '2021-04-04 04:21:12'),
(17, 6, 'কল সেন্টারসমূহ', 'active', NULL, 6, '', 'Admin', NULL, '2021-04-04 04:19:13', '2021-04-04 04:21:14'),
(18, 6, 'ফোনে ডাক্তারের সেবা', 'active', NULL, 6, '', 'Admin', NULL, '2021-04-04 04:19:30', '2021-04-04 04:21:16'),
(19, 7, 'অনলাইনে অভিযোগ দাখিল', 'active', NULL, 7, '', 'Admin', NULL, '2021-04-04 04:19:43', '2021-04-04 04:21:18'),
(20, 7, 'অভিযোগ প্রতিকার ব্যবস্থা', 'active', NULL, 7, '', 'Admin', NULL, '2021-04-04 04:19:53', '2021-04-04 04:21:19'),
(21, 7, 'নির্দেশিকাসমূহ', 'active', NULL, 7, '', 'Admin', NULL, '2021-04-04 04:20:04', '2021-04-04 04:21:25'),
(22, 8, 'ভূমি বিষয়ক আইন', 'active', NULL, 8, '', 'Admin', NULL, '2021-04-04 04:20:18', '2021-04-04 04:21:26'),
(23, 8, 'হটলাইন', 'active', NULL, 8, '', 'Admin', NULL, '2021-04-04 04:20:29', '2021-04-04 04:21:28'),
(24, 8, 'বার্ষিক কর্মপরিকল্পনা', 'active', NULL, 8, '', 'Admin', NULL, '2021-04-04 04:20:43', '2021-04-04 04:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Get20BJ7rSc2ndsOeseMLK2dp6UqGDqV5uFtIKOs', NULL, '10.252.253.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGRRTDJ4ZTlNRXlUT2ZUY05sRXN6blRmZTVkVFJXYXduaFg0M3h0cSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMC4yNTIuMjUzLjYvTkdPX1BvcnRhbDEvcHJvZmlsZSI7fX0=', 1618318044),
('IcBrSRDeFNl4ibXPz4P6nTTRek6c56gDVuDBSHeM', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieUhMQ3pWN1BFZ1licFpNQ0IwRVZoZWkyeEZiakRQWmVmZXNKOFBkTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3QvTkdPX1BvcnRhbDEiO319', 1618317904),
('r0m1HbpAn3Nc3MeczolNDAb8IjhPBVBOl4CMdmzB', NULL, '10.252.253.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFZTTk5aekZBUnNsUThCUHMxSEtlZFJBN01PWFh5RzNLcmpyQlFVOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjI6Imh0dHA6Ly8xMC4yNTIuMjUzLjYvTkdPX1BvcnRhbDEvbWFyaWUtc3RvcGVzLWJhbmdsYWRlc2gvdmlzaW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1618317309),
('vmOLWFaQmvlwqmKniFbrRMQHFDXCLKKeoUTftHde', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFFkZjAzM0dPZXdLcmJlblN6WVpWeXZiQk1wWjJ6d01ydk9CckI3SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3QvTkdPX1BvcnRhbDEiO319', 1618318120);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `slider_image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1617532009_pexels-photo-417074.jpeg', 'active', 'Admin', NULL, '2021-04-04 04:26:49', '2021-04-04 04:27:12'),
(2, '1617532015_road-1072823__340.jpg', 'active', 'Admin', NULL, '2021-04-04 04:26:55', '2021-04-04 04:27:14'),
(3, '1617532022_unnamed.jpg', 'active', 'Admin', NULL, '2021-04-04 04:27:02', '2021-04-04 04:27:15'),
(4, '1617532027_3b1cfaff4adbaa3aa4d781bc25dde452.jpg', 'inactive', 'Admin', NULL, '2021-04-04 04:27:07', '2021-04-04 04:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin.gif',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `status`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `role`, `image`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', 'active', '2021-04-04 04:11:56', '$2y$10$slyhnhGzoVWOGnXSAknd2.3HFuw8SINOrd4pHm5km3ItuUqZOGrNa', NULL, NULL, 'admin', 'admin.gif', 'fRvfZzXSSvjVMW9GWYpwUITovqhidFNAIeCEYHxM3SZRnglOWOFBs6hN5DVx', NULL, NULL, '2021-04-04 04:11:56', '2021-04-04 22:47:45'),
(2, 'BRAC', '+8801303653859545', 'brac@gmail.com', 'inactive', NULL, '$2y$10$IFCR8Ype0mNJ0qpLF3yGJ.Dlp7iOd/NgZYvp2ygTVl.GPBG6UTu32', NULL, NULL, 'user', '1618309508_brac-logo.png', NULL, NULL, NULL, '2021-04-04 05:02:19', '2021-04-13 04:25:08'),
(3, 'Marie Stopes Bangladesh', '+88012213653859', 'marie@gmail.com', 'inactive', NULL, '$2y$10$2RxYBu.iBX3tjDvr6eICluZWHxnK9HogmsOlT4fKrpafo3GGp7xi.', NULL, NULL, 'user', 'admin.gif', NULL, NULL, NULL, '2021-04-04 05:03:48', '2021-04-04 05:03:48'),
(16, 'Hope Barrett', '+1 (721) 144-1152', 'indrojit70@gmail.com', 'inactive', NULL, '$2y$10$A9QNjwugO9LmrhQJAFqrxeUG239OFcDxwN84.dGiBvBZJm3T6dj6.', NULL, NULL, 'user', 'admin.gif', NULL, NULL, NULL, '2021-04-05 01:17:48', '2021-04-05 01:17:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_tables`
--
ALTER TABLE `about_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_tables_ngo_id_foreign` (`ngo_id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_ngo_id_foreign` (`ngo_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `frontend_logo_and_name_settings`
--
ALTER TABLE `frontend_logo_and_name_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governing_members`
--
ALTER TABLE `governing_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `governing_members_ngos_id_foreign` (`ngos_id`);

--
-- Indexes for table `main_image_videos`
--
ALTER TABLE `main_image_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngos`
--
ALTER TABLE `ngos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ngos_slug_unique` (`slug`),
  ADD KEY `ngos_user_id_foreign` (`user_id`);

--
-- Indexes for table `ngo_executive_committees`
--
ALTER TABLE `ngo_executive_committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_seens`
--
ALTER TABLE `ngo_seens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ngo_seens_ngo_id_foreign` (`ngo_id`),
  ADD KEY `ngo_seens_notice_id_foreign` (`notice_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `officers_ngo_id_foreign` (`ngo_id`);

--
-- Indexes for table `our_responsibilities`
--
ALTER TABLE `our_responsibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_ngo_id_foreign` (`ngo_id`);

--
-- Indexes for table `scheduled_activities`
--
ALTER TABLE `scheduled_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scheduled_activities_ngo_id_foreign` (`ngo_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_details_service_id_foreign` (`service_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_tables`
--
ALTER TABLE `about_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend_logo_and_name_settings`
--
ALTER TABLE `frontend_logo_and_name_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `governing_members`
--
ALTER TABLE `governing_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_image_videos`
--
ALTER TABLE `main_image_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `ngos`
--
ALTER TABLE `ngos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo_executive_committees`
--
ALTER TABLE `ngo_executive_committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ngo_seens`
--
ALTER TABLE `ngo_seens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_responsibilities`
--
ALTER TABLE `our_responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scheduled_activities`
--
ALTER TABLE `scheduled_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_tables`
--
ALTER TABLE `about_tables`
  ADD CONSTRAINT `about_tables_ngo_id_foreign` FOREIGN KEY (`ngo_id`) REFERENCES `ngos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ngo_id_foreign` FOREIGN KEY (`ngo_id`) REFERENCES `ngos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `governing_members`
--
ALTER TABLE `governing_members`
  ADD CONSTRAINT `governing_members_ngos_id_foreign` FOREIGN KEY (`ngos_id`) REFERENCES `ngos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ngos`
--
ALTER TABLE `ngos`
  ADD CONSTRAINT `ngos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ngo_seens`
--
ALTER TABLE `ngo_seens`
  ADD CONSTRAINT `ngo_seens_ngo_id_foreign` FOREIGN KEY (`ngo_id`) REFERENCES `ngos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ngo_seens_notice_id_foreign` FOREIGN KEY (`notice_id`) REFERENCES `notices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `officers`
--
ALTER TABLE `officers`
  ADD CONSTRAINT `officers_ngo_id_foreign` FOREIGN KEY (`ngo_id`) REFERENCES `ngos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ngo_id_foreign` FOREIGN KEY (`ngo_id`) REFERENCES `ngos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scheduled_activities`
--
ALTER TABLE `scheduled_activities`
  ADD CONSTRAINT `scheduled_activities_ngo_id_foreign` FOREIGN KEY (`ngo_id`) REFERENCES `ngos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_details`
--
ALTER TABLE `service_details`
  ADD CONSTRAINT `service_details_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
