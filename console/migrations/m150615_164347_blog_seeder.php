<?php

use yii\db\Schema;
use yii\db\Migration;

class m150615_164347_blog_seeder extends Migration
{
        public function up()
    {
        $this->insert('blog', [
            'title' => 'Blog 1',
            'text' => 'This is the June edition of the Innovation Award podcast hangout recorded by Manuel Lemos and Arturs Sosins to comment on the outstanding features of all the past month nominees and winners PHP and JavaScript packages, the prizes that the authors earned, starting with the nominees from the month of March 2015.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        
        $this->insert('blog', [
            'title' => 'Blog 2',
            'text' => 'Nowadays it is common to find embedded hardware devices, based on Raspberry Pi for instance, that are accessible via a network, run Linux and come with Apache and PHP installed on the device.
                       Read this article to learn how you can use PHP on those devices to connect to sensors by the means sensor and actuator executable programs.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 3',
            'text' => 'Leaflet is a great JavaScript library that we can use build a Google Maps alternative with PHP and MySQL as we have seen in a previous article.
                       Read this article to learn how to improve your Leaflet map application by implementing a search engine on your maps pages using AJAX requests.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 4',
            'text' => 'Leaflet is a JavaScript library that became popular for creating mobile friendly Web maps applications. It does not depend on Google, so you do not need to pay fees as you may need to when you use Google Maps.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 5',
            'text' => 'When we need to provide our users access only to certain information, or limit access to features for authorized users only, we need to use user authentication.
                       We can never be 100% certain users are who they claim to be. However we can get close using multiple authentication factors.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 6',
            'text' => 'Nowadays many PHP developers use Object Oriented Programming (OOP). However not every PHP developer really understands why that is a good thing.
                       Some use OOP just because they see others using it, without knowing very well its benefits nor how to create a consistent object model that addresses the needs of their applications.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 7',
            'text' => 'Nowadays we develop applications that depend a lot on AJAX requests, in some cases close to 100% of the pages. Sometimes we notice that when a Web page sends two or more AJAX requests, PHP takes too much time to respond and then the responses are returned almost at the same time.
                       Chances are that the problem may be caused by the way you handle PHP sessions. Read this article to understand this problem and what you can do to avoid it.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 8',
            'text' => 'When PHP 7 will be released it will have the mysql extension removed from the core distribution. PHP 5.4 will stop being updated. Many PHP developers will have to move to PHP version 5.5 or higher, on which the mysql extension is deprecated. Many shared hosting providers already use PHP 5.5 without the mysql extension.
                        Alternative solutions to deal with legacy code that relies on the old mysql extension was one the topics commented by Manuel Lemos and Arturs Sosins in the episode 59 of the Lately in PHP podcast.
                        They also commented on proposals for future PHP versions like fixing the division by zero issue, adding static constructors to classes, the PHP RFC Watch site to keep up with new PHP proposals and voting.
                        They also explained the new initiative to promote reviews of books of authors that have written books of interest for PHP developers, as well writing great PHP tutorial articles for the PHP Classes blog and being compensated for that. The latest tutorial articles were also reviewed here.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 9',
            'text' => 'This is the May edition of the Innovation Award podcast hangout recorded by Manuel Lemos and Arturs Sosins to comment on the outstanding features of all the past month nominees and winners PHP and JavaScript packages, the prizes that the authors earned, starting with the nominees from the month of February 2015.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);
        $this->insert('blog', [
            'title' => 'Blog 10',
            'text' => 'The PHP Classes site is reviving its sections for book reviews and tutorial articles. This is an initiative to give more exposure to the work of those that can teach the PHP developers sharing their knowledge about important subjects.
                        The PHP Classes site book reviews and blog articles are notified by email to over 400,000 PHP developers. This initiative is a great opportunity for authors to expose their work to the PHP community at large.',
            'created_at' => 1434386290,
            'updated_at' => 1434386290,
        ]);

    }

    public function down()
    {
        echo "m150615_164347_blog_seeder cannot be reverted.\n";

        return false;
    }
}
