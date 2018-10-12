<?php

/**
 * Load internal library
 */
import_lib("libPhar.src.TestPhar");
//import_lib("Voiture.src.*");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplicationController
 *
 * @author Evarist Fangnikoue
 */
class ApplicationController extends RequestController {
    //put your code here

    /**
     * @RequestMapping(value=/message-{messaging_code}/{name}-{wife}/{email},method=GET)
     */
    function messaging($code, $name, $wife_name, $email) {
        echo "Your code is : " . $code . " Your email is : " . $email . " and your name is =>" . $name;
    }

    /**
     * @RequestMapping(value=/,method=GET)
     */
    function index_page() {
        // echo "I am the index page";
        //echo $this->getRoute_url();
        $this->redirect("login");
    }

    /**
     * @RequestMapping(value=/testPhar,method=GET)
     */
    function testPharLib() {

        //echo "Start test TestPahr";
        $phar_lib = new TestPhar();

        $phar_lib->whoami();

        // $my_lib = new ML();
        //  print_r($my_lib->predict());
        //  $voiture = new Voiture();
        // $voiture->setName("BMW");
        //echo $voiture->getName();
    }

    /**
     * 
     * @RequestMapping(value=/login,method=GET)
     */
    function login_page() {

        $login = new Login();

        $px = new pX(array("style" => "jquery", "url" => "/pjchoo/login/check/"));

        $px->px_login($login);
    }

    /**
     * @RequestMapping(value=/{project_name}/application/,method=GET)
     */
    function manager_project($project_name) {

        /**
         * Load css resources from the 
         * resources directory.
         * This folder must be added in the 
         * config.xml setting 
         */
        $this->addRessourcesCss("css", array("main"));

        /**
         * Load Javascript file from the configure resources
         * directory please 
         * @see RequestController::addRessourcesJs($resources_name)
         */
        $this->addRessourcesJs("js", array("main"));

        //represent the current html page interface
        $page = new Page();

        /**
         * start implementating all the object of the left menu 
         */
        $main_menu = new MyMenu(); //The left menu of the page

        $main_ul_list = new MyUL(); //The left menu ul tag

        $main_ul_list->setList_style_type("none");

        $class_element = new MyList();

        $class_element->add("menu_list");

        //Create 4 list elements 
        $main_ul_list->createNumberOfLiTag(8, array(
            "class" => $class_element,
            "padding_object" => array(
                "bottom" => 40
            ),
            "cursor" => "pointer"
                )
        );

        $main_ul_list->addClass("menu");

        $main_ul_list->Margin()->setTop(70);

        $main_ul_list->Margin()->setLeft(-30);

        $main_ul_list->Padding()->setBottom(10);

        $project_menu_title = new MySpan();

        $project_menu_title->setContent($project_name);

        $project_menu_title->setColor("#e5e5e5");

        $project_menu = new MyUL();

        //Create 4 list elements 
        $project_menu->createNumberOfLiTag(4, array(
            "padding_object" => array(
                "bottom" => 20
            ),
            "cursor" => "pointer"
                )
        );

        //$project_menu->setDisplay("none");

        $project_menu->setList_style_type("none");

        $project_menu->getInitiateList(0)->setContent("Edit");
        $project_menu->getInitiateList(0)->setFaIcons()->getPencilSquareO();
        $project_menu->getInitiateList(0)->setFaIcons()->Padding()->setRigth(10);
        $project_menu->getInitiateList(0)->setFaIcons()->Padding()->setTop(10);
        $project_menu->getInitiateList(0)->setColor("#e5e5e5");
        $project_menu->getInitiateList(1)->setColor("#e5e5e5");
        $project_menu->getInitiateList(1)->setContent("StackHolder");
        $project_menu->getInitiateList(2)->setColor("#e5e5e5");
        $project_menu->getInitiateList(2)->setContent("IM");


        $main_ul_list->changeFieldSetting(7)->getField()->add($project_menu_title);
        $main_ul_list->changeFieldSetting(7)->getField()->add($project_menu);
        $main_ul_list->changeFieldSetting(7)->setFaIcons()->getTasks();
        $main_ul_list->changeFieldSetting(7)->setCursor("pointer");
        $main_ul_list->changeFieldSetting(7)->setFaIcons()->setColor("#e5e5e5");
        $main_ul_list->changeFieldSetting(7)->setFaIcons()->Padding()->setRigth(10);
        $main_ul_list->changeFieldSetting(9)->setFaIcons()->getEnvelope();
        $main_ul_list->changeFieldSetting(9)->setFaIcons()->setColor("#e5e5e5");
        $main_ul_list->changeFieldSetting(9)->setFaIcons()->Padding()->setRigth(10);
        $main_ul_list->changeFieldSetting(11)->setFaIcons()->getUsers();
        $main_ul_list->changeFieldSetting(11)->setFaIcons()->Padding()->setRigth(10);
        $main_ul_list->changeFieldSetting(13)->setFaIcons()->getCommentsO();
        $main_ul_list->changeFieldSetting(13)->setFaIcons()->setColor("#e5e5e5");
        $main_ul_list->changeFieldSetting(13)->setFaIcons()->Padding()->setRigth(10);
        $main_ul_list->changeFieldSetting(15)->setFaIcons()->getLineChart();
        $main_ul_list->changeFieldSetting(15)->setFaIcons()->setColor("#e5e5e5");
        $main_ul_list->changeFieldSetting(15)->setFaIcons()->Padding()->setRigth(10);
        $main_ul_list->changeFieldSetting(17)->setFaIcons()->getCalendarCheckO();
        $main_ul_list->changeFieldSetting(17)->setFaIcons()->setColor("#e5e5e5");
        $main_ul_list->changeFieldSetting(17)->setFaIcons()->Padding()->setRigth(10);
        $main_ul_list->changeFieldSetting(19)->setFaIcons()->getTable();
        $main_ul_list->changeFieldSetting(19)->setFaIcons()->setColor("#e5e5e5");
        $main_ul_list->changeFieldSetting(19)->setFaIcons()->Padding()->setRigth(10);
        $main_ul_list->getInitiateList(1)->setContent("Email");
        $main_ul_list->getInitiateList(1)->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(2)->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(2)->setContent("StackHolder");
        $main_ul_list->getInitiateList(3)->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(3)->setContent("IM");
        $main_ul_list->getInitiateList(4)->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(4)->setContent("Reports");
        $main_ul_list->getInitiateList(5)->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(5)->setContent("Meeting");
        $main_ul_list->getInitiateList(6)->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(6)->setContent("Scheldule");

        $navigation_menu = new MyUL();

        $navigation_menu->setList_style_type("none");

        $navigation_menu->createNumberOfLiTag(3);

        $main_ul_list->changeFieldSetting(7)->getField()->add($navigation_menu);


        $main_menu->Aside()->getField()->add($main_ul_list);
        $main_menu->right();
        $main_menu->Aside()->setBackgroundColor("gray");

        /**
         * Start creating the left menu group
         * to hold all the menu objects
         */
        $menu_division_left = new MyGroup();
        $menu_division_left->setBackgroundColor("gray");
        $menu_division_left->getField()->add($main_ul_list);
        $menu_division_left->left();
        $menu_division_left->setWidth("10%");

        /**
         * end menu division left
         */
        /**
         * Start creating the menu division 
         * object to all the left menu items
         */
        $menu_division_top = new MyGroup();
        $menu_division_top->setBackgroundColor("#15458a");
        $menu_division_top->getField()->add($navigation_menu);
        $menu_division_top->setHeight("7%");
        $menu_division_top->top();

        /**
         * end of creating menu division
         * object
         */
        /**
         * Start creating menu image of the 
         * top menu
         */
        $menu_image = new MySpan();
        $menu_image->setFaIcons()->getAlignJustify();
        $menu_image->setFaIcons()->setColor("white");
        $menu_image->Font()->setSize(25);
        $menu_image->Margin()->setTop("-5");
        $menu_image->setPosition("absolute");
        $menu_image->setCursor("pointer");
        $menu_image->Margin()->setLeft(111);
        /**
         * end of creating image object of the top menu
         */
        $menu_division_top->getField()->add($menu_image); //add this menu image to the top menu division


        $menu_division_left->setHeight("auto");
        /**
         * Start adding all the menu to the web page
         * interface
         */
        $page->webPage()->add($menu_division_left);
        $page->webPage()->add($menu_division_top);
    }

    /**
     * @RequestMapping(value=/receiver/,method=GET)
     */
    function application_data_reciever() {

        $this->response->map("success", true);
        $this->response->map("error_desc", "The username is invalid");

        echo $this->getResponse()->sendJsonResponse();

        // echo $this->getJsModel()->getListValue();
    }

    /**
     * @RequestMapping (value=/ckeditor/,method=GET)
     */
    function ckEditor() {

        $page = new Page();

        $textarea = new MyTextArea();

        $textarea->setContent("Hello there, i am richtextarea 0");

        $textarea->useRichTextArea();

        $textarea->setLeft(30);

        $textarea->setWidth("30%");

        $textarea_1 = new MyTextArea();

        //$textarea_1->setDisabled(true);

        $textarea_1->setContent("Hello there, i am richtextarea 1");

        $textarea_1->useRichTextArea();

        $textarea_1->setPosition("absolute");

        $textarea_1->setRigth(30);

        $textarea_1->setWidth("30%");


        $textarea_2 = new MyTextArea();

        //$textarea_2->setDisabled(true);

        $textarea_2->setContent("Hello there, i am richtextarea 2");

        $textarea_2->useRichTextArea();

        $textarea_2->setCenter(true);


        $page->webPage()->add($textarea);
        $page->webPage()->add($textarea_1);
        $page->webPage()->add($textarea_2);
    }

    /**
     * @RequestBody(value=/insert_data,method=GET)
     */
    function application_insert_data(TestDb $test_db) {
        $test_db->Insert();
    }

    /**
     * @RequestBody(value=/insert_dev,method=GET)
     */
    function application_insert_developer(TestInsert $test_db) {
        $test_db->Insert();
    }

    /**
     * @RequestMapping(value=/view_data,method=GET)
     */
    function view_data() {

        $test_db = new TestDb();

        $test_db->viewStoreDataAsTable();
//
//        $this->view()->changeFieldSetting(2)->setBackgroundColor("yellow");
//        $this->view()->changeFieldSetting(2)->setColor("black");
//        $this->view()->changeFieldSetting(3)->setFaIcons()->getAndroid();
//        $this->view()->changeFieldSetting(4)->setFaIcons()->getAmazon();
//        $this->view()->changeFieldSetting(4)->setFaIcons()->setColor("red");
        //$test_db->loadDataAsAnnotationSetting();
        // $this->view()->changeFieldSetting(2)->setBackgroundColor("yellow");
        // $this->view()->changeFieldSetting(2)->setColor("black");
        // $this->view()->changeFieldSetting(3)->changeClassName("align_center", "align_left");
        //$this->view()->changeFieldSetting(4)->changeClassName("align_center", "align_right");
    }

    /**
     * @RequestMapping(value=/widget_test/,method=GET)
     */
    function widget() {

        // $this->view()->addBaseTag("https://localhost/images/");

        /* ####################
         * start testing abbr tag
         * ####################
         */
        $span = new MySpan();

        $span->setContent("The WHO was founded in 1948 with WHO.");

        $span->readTextRightToLeft()
                ->addAbbr()
                ->setSearch_text("WHO", "World Health Organization")
                ->setColor("red");


        $span->addBreak(4);

        $this->viewController()->add($span);

        //end test abbr tag

        /* ####################
         * start testing address tag
         * ####################
         */

        $address = new MyAddress();

        $span_addr = new MySpan();

        $cite = new Cite();

        $cite->setContent("Hello i am a cite");

        $cite->setColor("green");


        $span->getField()->add($cite);

        $span_addr->setContent("Written by");

        $span_addr->addBold();

        $span_addr->Padding()->setRigth("5");

        $address->getField()->add($span_addr);

        $add_link = new Link();

        $add_link->setContent("Jon Doe");

        //$add_link->readTextLeftToRight();

        $add_link->setHref("mailto:webmaster@example.com");

        $add_link->getText()->setDecoration("none");

        $address->getField()->add($add_link);

        $this->viewController()->add($address);

        $address->addBreak();
        //end address tag

        /* ####################
         * start testing select tag
         * ####################
         */
        $select = new MySelect();

        $select->addOption("Fangnikoue", "Name");

        $select->getFancy();

        $select->setOutline("none");



        $this->viewController()->add($select);
        //end testing select

        /* ####################
         * start testing Map tag
         * ####################
         */

        $img = new MyImage();

        $map = new Map();

        $area = new Area();

        $map->setName("planetmap");

        $area->setShape("rec");

        $area->Coord()->setLeft(80);

        $area->Coord()->setTop(30);

        $area->setAlternateTitle("sun");

        $area->setHref("sun.html");

        $map->addMap_area($area);

        $img->addMap($map);

        $this->viewController()->add($img);
        $this->viewController()->add($map);
        //end testing Map


        /* ####################
         * start testing audio tag
         * ####################
         */

        $paragrath = new MyParagrapth();

        $paragrath->setCenter(true);

        $audio = new MyAudio();

        $audio->setPath("audio");

        $audio->Source()->add("horse");

        // $audio->setCustomExtension("ogg,mp3");//use to allow the app to display more than one source of the same file

        $audio->addControls();

        $audio->setCenter(true);

        $paragrath->getField()->add($audio);

        $this->viewController()->add($paragrath);
        //end testing audio

        /* ####################
         * start testing blockquote tag
         * ####################
         */

        $block_quote = new MyBlockQuote();

        $block_quote->setContent("For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.");


        $block_quote->setCitation("http://www.worldwildlife.org/who/index.html")
                ->addAbbr()
                ->setSearch_text("WWF", "World Web Function")
                ->setCursor("pointer");

        $block_quote->setWidth("70%");

        $this->viewController()->add($block_quote);
        //end testing blockquote


        /* ####################
         * start testing table colgroup tag
         * ####################
         */

        $table = new MyTable();

        $table_tr = new tableTr();

        $table_tr->addArrayTh(array("Name", "Email", "Phone Number"))
                ->useEven();


        for ($index = 0; $index < 7; $index++) {
            $table->addTableTr($table_tr);
        }

        //$table->Colgroup()
        //    ->NewCol()
        //    ->setSpanNumber(2)
        //   ->setBackgroundColor("red");
        // $table->Colgroup()
        //       ->NewCol()
        //     ->setBackgroundColor("yellow");

        $table->Border()
                ->setCollapse("collapse");


        //$table->Colgroup()->Col()->First()->
        //$table->Colgroup()->Col(1)->setBackgroundColor("yellow");
        //$table->Colgroup()->Col(1)->setSpanNumber(2);
        //$table->Colgroup()->addNewCol();
        //$table->Colgroup()->Col(2)->setBackgroundColor("red");

        $table->Margin()->setTop(150);

        $this->viewController()->add($table);
        //end table colgroup


        /* ####################
         * start testing dl tag
         * ####################
         */

        $dl = new DescriptionList();

        $dl->Description_dl()
                ->setContent("Black hot drink")
                ->setColor("blue")
                ->addDescription_dd()
                ->setContent("White Cold drink")
                ->setColor("red")
                ->addDescription_dd()
                ->setContent("Black Cold Drink");

        $dl->Description_dl()
                ->setContent("white hot drink")
                ->addDescription_dd()
                ->setContent("White Cold drink")
                ->addDescription_dd()
                ->setContent("Red Cold Drink")
                ->addDescription_dd()
                ->setContent("Blue Cold Drink");
//        $dl->Description_dl()
//                ->setContent("White hot drink")
//                ->addDescription_dd()
//                ->setContent("White Cold drink")
//                ->addNewDescription_dd()
//                ->setContent("White Hot drink")
//                ->addNewDescription_dd()
//                ->setContent("White Hot2 drink");

        $dl->Margin()->setTop(150);
        $dl->addBreak(4);
        // $this->viewController()->add($dl);
        //end dl tag 

        /* ####################
         * start testing del tag
         * ####################
         */

        $del_paragrath = new MyParagrapth();

        $del_paragrath->setContent("For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.");

        $del_paragrath->Del_content()
                ->setSearch_text("The world's leading conservation organization,")
                ->setColor("red")
                ->setCitation("del_demo_cite.htm");


        $del_paragrath->Margin()->setTop(150);
        $this->viewController()->add($del_paragrath);
        //end em tag

        /* ####################
         * start testing del tag
         * ####################
         */
        $emphasize = new MyEmphasize();

        $emphasize->setContent("Hello i am em tag")
                ->setColor("blue");



        $this->viewController()->add($emphasize);
        //end em tag

        /* ####################
         * start testing embed tag
         * ####################
         */

        $embed = new MyEmbed();

        $embed->setPath("swing")
                ->setWidth("50%")
                ->setHeight("50%")
                ->Source()
                ->add("conctheatreus");


        // $this->viewController()->add($embed);
        //end embed tag

        /* ####################
         * start testing figure tag
         * ####################
         */

        $figure = new MyFigure();

        $image = new MyImage();

        $image->setPath("image")
                ->setImage_name("img_pulpit");

        $figure->addFigcaption()
                ->setContent("Fig.1 - A view of the pulpit rock in Norway.")
                ->setColor("red");

        $figure->getField()->add($image);

        //$this->viewController()->add($figure);
        //end figure tag

        /* ####################
         * start testing footer tag
         * ####################
         */

        $my_para = new MyParagrapth();

        $my_para->setContent("Hello this is a footer declaration");

        $this->setCopyRight("Pchoo")
                ->setColor("red");

        $this->footerView()->add($my_para);
        //end footer tag

        /* ####################
         * start testing header tag
         * ####################
         */
        $header_1 = new FirstHeader();
        $header_1->setContent("This is heading 1")
                ->setTop("10px")
                ->setColor("red")
                ->setCenter(true);

        $header_2 = (new SecondHeader())
                ->setContent("This is heading 2")
                ->setTop("20px")
                ->setColor("green")
                ->setCenter(true);

        $header_2->Margin()
                ->setTop("150px");

        //$this->viewController()->add($header_1);
        //$this->viewController()->add($header_2);
        //end header tag

        /* ####################
         * start testing hr tag
         * ####################
         */

        $hr_line = new MyHrLine();

        $hr_line->setColor("red");

        //$this->viewController()->add($hr_line);
        //end hr tag

        /* ####################
         * start testing i tag
         * ####################
         */

        $italic = new MyParagrapth();

        $italic->setContent("He named his car The lightning, because it was very fast.")
                ->addItalic()
                ->setSearch_text("The lightning")
                ->setColor("red");

        $this->viewController()->add($italic);
        //end i tag


        /* ####################
         * start testing iframe tag
         * ####################
         */
        $frame = new MyIFrame();

        $frame->setSrc("../login")
                ->setSandBox("allow-same-origin allow-scripts")
                ->setHeight("80%")
                ->setBackgroundColor("red")
                ->setWidth("50%");


        //$this->viewController()->add($frame);
        //end iframe tag

        /* ####################
         * start testing ins tag
         * ####################
         */

        $ins_tag = new MyParagrapth();

        $ins_tag->setContent("My favorite color is red")
                ->addIns()
                ->setSearch_text("favorite")
                ->setColor("red");

        // $this->viewController()->add($ins_tag);
        //end ins

        /* ####################
         * start testing main tag
         * ####################
         */

        $main_tag = new MyMain();

        $article = new MyArticle();

        $article_para = new MyParagrapth();

        $article_para->setContent("Google Chrome, Firefox, and Internet Explorer are the most used browsers today.")
                ->Del_content()
                ->setSearch_text("Firefox")
                ->setColor("red");


        $article->addWidget($article_para);

        $main_tag->addWidget($article);

        //$this->viewController()->add($main_tag);
        //end main tag


        /* ####################
         * start testing mark,ins,del tag
         * ####################
         */
        $mark_del_ins_para = new MyParagrapth();

        $mark_del_ins_para->setContent("Google Chrome, Firefox, and Internet Explorer are the most used browsers today.")
                ->addMark()
                ->setSearch_text("browsers");


        $mark_del_ins_para
                ->addIns()
                ->setSearch_text("Internet Explorer")
                ->setColor("red");


        $mark_del_ins_para
                ->Del_content()
                ->setSearch_text("Firefox")
                ->setColor("red");

        $this->viewController()->add($mark_del_ins_para);
        //end mark,ins,del tag

        /* ####################
         * start testing mark tag
         * ####################
         */
        $mark_para = new MyParagrapth();

        $mark_para->setContent("Google Chrome, Firefox, and Internet Explorer are the most used browsers today.")
                ->addMark()
                ->setSearch_text("browsers");

        $this->viewController()->add($mark_para);

        //end mark tag


        /* ####################
         * start testing meter tag
         * ####################
         */
        $meter = new MyMeter();
        $meter->setValue(45)
                ->setInput_min(0)
                ->setInput_max(100)
                ->setContent("2 out of 10")
                ->setColor("red");

        // $this->viewController()->add($meter);
        //end meter tag

        /* ####################
         * start testing nav tag
         * ####################
         */
        $navigation = new MyNav();

        $navigation->addWidget($meter);


        $this->viewController()->add($navigation);
        //end nav tag

        /* ####################
         * start testing noscrypt tag
         * ####################
         */
        $noscript = new MyNoScript();

        $noscript->setContent("Your browser does not support JavaScript!")
                ->appendContent("Your browser does not support JavaScript!")
                ->appendContent("Your browser does not support JavaScript!");


        $this->viewController()->add($noscript);
        //end noscript tag

        /* ####################
         * start testing object tag
         * ####################
         */
        $object = new MyHtmlObject();

        $object->setPath("audio")
                ->addSource_data("horse")
                ->setWidth("400")
                ->setHeight("400")
                ->setUsemap("#planetmap");

        $object_param = new MyParam();

        $object_param->setName("autoplay")
                ->setValue(true);



        //  $this->viewController()->add($object);
        //end object tag

        /* ####################
         * start testing select tag
         * ####################
         */

        $select_tag = new MySelect();

        $select_tag->addOptionGroup()
                ->setCursor("pointer")
                ->setLabel("Swedish Cars")
                ->setColor("red")
                ->addOption("Volvo", "volvo")
                ->addOption("Saab", "saab");

        $select_tag->addOptionGroup()
                ->setLabel("German Cars")
                ->setColor("blue")
                ->addOption("Mercedes", "mercedes")
                ->addOption("Audi", "audi");


        $this->viewController()->add($select_tag);

        //end select tag

        /* ####################
         * start testing output tag
         * ####################
         */

        $output = new MyOuput();

        $output->setName("x")
                ->setFor("a b");

        $this->viewController()->add($output);

        //end output tag

        /* ####################
         * start testing picture tag
         * ####################
         */
        $picture = new MyPicture();

        $picture->setPath("image")
                ->addSrcSet("img_pink_flowers")
                ->addMediaQueryWidth(950)
                ->addSrcSet("img_white_flower")
                ->addMediaQueryWidth(665)
                ->addImage("img_orange_flowers")
                ->setPath("image");


        $picture->shortHandAnimation()
                ->setName("my_new_next_move_4")
                ->setDuration(5)
                ->setTimming_function("infinite")
                ->keyFrame()
                ->setAnimation_from()
                ->setRigth(200)
                ->setTop(70)
                ->setAnimation_to()
                ->setRigth(300)
                ->setTop(10)
                ->setCursor("pointer")
                ->load_animation();

        $picture->actionHandler()
                ->click()
                ->change()
                ->stopRestartAnimation()
                ->loadChange();


        $this->viewController()->add($picture);

        //end picture tag

        /* ####################
         * start testing pre tag
         * ####################
         */
        $my_pre = new MyPre();

        $my_pre->setContent("hello,there");

        $this->viewController()->add($my_pre);

        //end pre tag

        /* ####################
         * start testing quote tag
         * ####################
         */
        $my_quote = new Quote();

        $my_quote->setContent("Build a future where people live in harmony with nature.");


        $quote_para = new MyParagrapth();

        $quote_para->setContent("WWF's goal is to:Build a future where people live in harmony with nature.We hope they succeed.")
                ->setQuote_to_use("<<", ">>")
                ->addQuote()
                ->setSearch_text("Build a future where people live in harmony with nature.")
                ->setColor("green");

        $this->viewController()->add($quote_para);

        // $this->viewController()->add($my_quote);
        //end quote tag
        /* ####################
         * start testing progress tag
         * ####################
         */
        $my_progress = new MyProgress();

        $my_progress->setValue(45)
                ->setInput_max(100);

        $this->viewController()->add($my_progress);

        //end progress tag

        /* ####################
         * start testing ruby tag
         * ####################
         */

        $my_ruby = new MyRuby();

        $my_ruby->setContent("漢")
                ->addRt()
                ->setContent("ㄏㄢˋ")
                ->openRP("(")
                ->closeRP(")");

        $this->viewController()->add($my_ruby);

        //end ruby tag

        /* ####################
         * start testing s tag
         * ####################
         */

        $strike_para = new MyParagrapth();

        $strike_para->setContent("WWF's goal is to:Build a future where people live in harmony with nature.We hope they succeed.")
                ->addQuote()
                ->setSearch_text("Build a future where people live in harmony with nature.")
                ->setColor("green");

        $strike_para
                ->addStrike()
                ->setSearch_text("future where people live")
                ->setColor("red");

        $this->viewController()->add($strike_para);

        //end s tag

        /* ####################
         * start testing samp tag
         * ####################
         */
        $my_samp = new MySamp();

        $my_samp->setContent("Sample output from a computer program")
                ->setColor("red");

        $this->viewController()->add($my_samp);

        //end samp tag

        /* ####################
         * start testing section tag
         * ####################
         */

        $my_section = new MySection();

        $my_section->addparagrath()
                ->setContent("The World Wide Fund for Nature (WWF) is....");

        $my_section->setColor("brown");


        $this->viewController()->add($my_section);
        //end section tag

        /* ####################
         * start testing small tag
         * ####################
         */
        $my_small = new MySmall();

        $my_small->setContent("Sample output from a computer program")
                ->setColor("red");

        $this->viewController()->add($my_small);

        //end small tag

        /* ####################
         * start testing strong tag
         * ####################
         */
        $my_strong = new MyStrong();

        $my_strong->setContent("Sample output from a computer program")
                ->setColor("red");

        $this->viewController()->add($my_strong);

        //end strong tag


        /* ####################
         * start testing sub and sup tag
         * ####################
         */

        $substribe_para = new MyParagrapth();

        $substribe_para->setContent("WWF's goal is to:Build a future where people live in harmony with nature.We hope they succeed.")
                ->addSubscript()
                ->setSearch_text("harmony")
                ->setColor("green");

        $substribe_para->addSupscript()
                ->setSearch_text("future")
                ->setColor("red");


        $this->viewController()->add($substribe_para);
        //end sub and sup tag

        /* ####################
         * start testing time tag
         * ####################
         */
        $my_timer = new MyTimer();

        $my_timer->setContent("every morning.")
                ->setDatetimeAttribite("2008-02-14 20:00");


        $this->viewController()->add($my_timer);
        //end time tag

        /* ####################
         * start testing time tag
         * ####################
         */

        $timer_para = new MyParagrapth();

        $timer_para->setContent("We open at 10:00 every morning.")
                ->addTimer()
                ->setSearch_text("10:00");

        $this->viewController()->add($timer_para);

        //end time tag

        /* ####################
         * start testing u tag
         * ####################
         */

        $underline_para = new MyParagrapth();

        $underline_para->setContent("We open at 10:00 every morning.")
                ->addUnderline()
                ->setSearch_text("10:00")
                ->setColor("red")
                ->setBackgroundColor("yellow");

        $this->viewController()->add($underline_para);

        //end u tag

        /* ####################
         * start testing var tag
         * ####################
         */
        $my_var = new MyVar();

        $my_var->setContent("Sample output from a computer program")
                ->setColor("green");

        $this->viewController()->add($my_var);

        //end var tag

        /* ####################
         * start testing wbr tag
         * ####################
         */
        $my_wbr_para = new MyParagrapth();

        $my_wbr_para->setContent("This is a veryveryveryveryveryveryveryveryveryveryveryveryveryveryveryveryveryverylongwordthatwillbreakatspecificplaceswhenthebrowserwindowisresized.")
                ->addHtmlBreakTag()
                ->addTagBefore("longword")
                ->addTagBefore("placeswhen")
                ->addTagBefore("window");

        $this->viewController()->add($my_wbr_para);

        //end wbr tag

        /* #######################
         * start testing video tag
         * #######################
         */
        $video = new MyVideo();

        $video->setPath("video")
                ->addControls()
                ->setCenter(true)
                ->addSourceData("movie")
                ->addTrack()
                ->setPath("vtt")
                ->setSrc("subtitles_en")
                ->setKind("subtitles")
                ->setSrclang("en")
                ->setLabel("English")
                ->setDefault()
                ->addTrack()
                ->setPath("vtt")
                ->setSrc("subtitles_no")
                ->setKind("subtitles")
                ->setSrclang("no")
                ->setLabel("Norwegian")
                ->setColor("red")
                ->setBackgroundColor("white")
                ->addVttStyle();

        //$video->Margin()
        //       ->setLeft(150);


        $this->viewController()->add($video);

        //end video tag

        /* ##########################################
         * start testing body style
         * ##########################################
         */
        $this->view()->body()
                ->Padding()
                ->setTop(80);

        $this->view()->body()->Background()
                ->setPath("image")
                ->add_image("img_orange_flowers")
                ->setSize("80px 60px")
                ->setRepeat("no-repeat");
        //end body style
    }

    /**
     * @RequestMapping( value=/console)
     */
    function console() {

        $console = new MyIFrame();

        $console->setSrc("http://192.168.8.5:8888/wetty/")
                ->setWidth("100%")
                ->setHeight("700px");

        $this->viewController()->add($console);
    }

    /**
     * @RequestMapping( value=/px_chart)
     */
    function px_chart() {

        $px_chart = new PxChart();

        $pie_chart = $px_chart->Pie();

        $bar_chart = $px_chart->Bar();

        $list_dl_dd = array(
            "IE 11" => 98,
            "Chrome" => 52,
            "Firefox" => 50,
            "Safari" => 12,
            "Opera" => 36,
            "Android 4.4" => 100
        );


        $pie_simple_list = array(
            "IE 11er" => 300,
            "IE 11" => 30,
            "IE 11rest" => 80,
            "Chrome" => 40,
            "Chromes" => 50,
            "Firefox" => 100,
            "Firefoxes" => 200,
            "Firefoxesrt" => 670,
            "Mozilla" => 200,
            "Firefoxwsd" => 83,
            "Firefoxesqwa" => 210,
            "Firefoxesrtewq" => 800,
            "Mozillawedd" => 80,
            "Firefoxwsded" => 83,
            "Firefoxeswedqwa" => 210,
            "Firefoxesrww2tewq" => 830,
            "Mozillawed34fd" => 80,
            "Firefoxwsdededw" => 83,
            "Firefoxeswedqwasww" => 210,
            "Firefoxesrww2tewedwq" => 810,
            "Mozillawed34fdwqqw" => 80
        );

        $pie_chart_widget = $pie_chart->simpleChart($pie_simple_list)->showLegend();

        // $pie_chart->showLegend($pie_chart_widget);

        $bar_horizontal = $bar_chart->addTitle("Browser market share June 2015")
                ->horizontalChart($list_dl_dd, true)
                ->showLegend();



        $vertical_list_dl_dd = array(
            "IE 11" => 18450,
            "Chrome" => 60000,
            "Firefox" => 40000,
            "Mozilla" => 5000,
            "Safari" => 20000,
            "Opera" => 51000,
            "Android 4.4" => 32225,
            "Ev engine" => 70000,
            "Lome engine" => 32425,
            "Togo engine" => 10000,
            "Android ee4.4" => 32225,
            "Ev engineee" => 70000,
            "Lome engineee" => 32425,
            "Togo engineeee" => 10000
        );

        $dot_list_dl_dd = array(
            "IE 11" => 18450,
            "Chrome" => 60000,
            "Firefox" => 40000,
            "Mozilla" => 5000,
            "Safari" => 20000,
            "Opera" => 51000,
            "Android 4.4" => 32225,
            "Ev engine" => 70000,
            "Lome engine" => 32425,
            "Togo engine" => 10000,
            "IE 11ee" => 18450,
            "Chromsse" => 60000,
            "Firefoxss" => 40000,
            "Mozillssa" => 5000,
            "Safarssi" => 20000,
            "Operass" => 51000,
            "Androsssid 4.4" => 32225,
            "Ev essngine" => 70000,
            "Lomess engine" => 32425,
            "Togo essngine" => 10000
        );


        $bar_vertical_chart = $bar_chart->addTitle("QUARTERLY RESULTS")
                ->verticalChart($vertical_list_dl_dd, true)
                ->showLegend();

        $bar_vertical_line_chart = $bar_chart->addTitle("QUARTERLY RESULTS")
                ->verticalLineChart($dot_list_dl_dd, true)
                ->showLegend();

        $bar_circle_chart = $bar_chart->addTitle("QUARTERLY RESULTS")
                ->CircleChart($vertical_list_dl_dd, true)
                ->showLegend();

        $bar_vertical_dot_chart = $bar_chart->addTitle("QUARTERLY RESULTS")
                ->verticalDotChart($dot_list_dl_dd, true)
                ->showLegend();

        $vertical_list_dl_dd_compare = array(
            "IE 11" => array(18450, 98),
            "Chrome" => array(60000, 221),
            "Firefox" => array(40000, 50),
            "Safari" => array(20000, 12),
            "Opera" => array(51000, 36),
            "Android 4.4" => array(32225, 1000),
            "Ev engine" => array(60000, 12),
            "Lome engine" => array(32425, 36),
            "Togo engine" => array(10000, 10000)
        );


        $bar_vertical_compare = $bar_chart
                ->verticalChartCompare($vertical_list_dl_dd_compare, true)
                ->showLegend();

        //$bar_chart->vertical
        // $bar_chart->showLegend($bar_vertical_compare);


        $this->viewController()->add($bar_vertical_chart);
        $this->viewController()->add($bar_vertical_line_chart);
        $this->viewController()->add($bar_vertical_dot_chart);
        $this->viewController()->add($bar_circle_chart);
        $this->viewController()->add($bar_vertical_compare);
        $this->viewController()->add($pie_chart_widget);
        $this->viewController()->add($bar_horizontal);
    }

    /**
     * @RequestMapping( value=/change_file_line)
     */
    function change_file_line() {

        $file_object = new FileIO();

//        $file_object->setFile_name("note_2017_11_30.txt")
//                ->setPath("file")
//                ->modeFileLine(6, "change line 6");
//        
//        $file_object->setFile_name("controlClass.class.php")
//                ->setPath("file")
//                ->commentLine(20, 22);
//        $file_object->setFile_name("controlClass.class.php")
//                ->setPath("file")
//                ->modeFileListLine(array(52 => "Hello 1", 78 => "hello this line has been change today"));
        // echo  $file_object->setFile_name("controlClass.class.php")
        //   ->setPath("file")
        //    ->getFile_content();
    }

    /**
     * @RequestMapping( value=/allow_multiple_db)
     */
    function allow_multiple_db() {

        $test_db = new TestDb();

        //echo $test_db->getUsername();
        //$list_test_db = $test_db->getDataForTable();
        //echo $list_test_db[0]->getPassword();
        // $test_db->viewStoreDataAsTable();

        $list_object = $test_db->getDataLimitForTable(0, 2);

        foreach ($list_object as $value) {

            echo $value->getUsername() . "<br/>";
        }
        //$test_db->insert_data_into_table("username", "Malinda");

        $list_object_email = $test_db->getAllDataForField("email", "Evaristos@gmail.com");

        foreach ($list_object_email as $value) {

            echo $value->getEmail() . "<br/>";
        }
    }

    /**
     * @RequestMapping(value=/mail_setting-{mailler_name})
     */
    function email_setting($mailler_name) {

        $mail_setting = $this->getMailSettingIdentifiedByName($mailler_name);

        $mail_setting->setSubject("Testing Mail server");

        $mail_setting->setMessageBody("Hello There");

        $mail_setting->setEmail("malevae@gmail.com");

        $mail_setting->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        try {

            echo "Hi there";

            $mail_setting->sendEmail();
        } catch (phpmailerException $ex) {
            print_r($ex->getTrace());
        }
    }

    /**
     * @RequestMapping( value=/css_properties)
     */
    function css_style_test() {


        /* #######################
         * start testing animation property
         * #######################
         */

        //shothand
        $group = new MyGroup();

        $group_2 = new MyGroup();

        $group_3 = new MyGroup();

        $group_4 = new MyGroup();

        $group->setWidth(100)
                ->setHeight(100)
                ->setBackgroundColor("red")
                ->setPosition("relative")
                ->Animation()
                ->setDelay(2);

        $group_2->setWidth(100)
                ->setHeight(100)
                ->setBackgroundColor("green")
                ->setPosition("relative")
                ->Animation()
                ->setDelay(2);

        $group_3->setWidth(100)
                ->setHeight(100)
                ->setBackgroundColor("green")
                ->setPosition("relative")
                ->Animation()
                ->setDirection("alternate")
                ->setDelay(2);

        $group_4->setWidth(100)
                ->setHeight(100)
                ->setCursor("pointer")
                ->setBackgroundColor("green")
                ->setPosition("relative")
                ->Animation()
                ->setDirection("alternate")
                ->setDelay(2)
                ->setFill_mode("forwards")
                ->setIteraction_count(3)
                ->setPlay_state("paused");

//        $group->shortHandAnimation()
//                ->setAnimation_from(0)
//                ->setAnimation_to(300)
//                ->setName("my_move")
//                ->setKey_frame_position("right")
//                ->setDuration(5)
//                ->setTimming_function("infinite")
//                ->load_animation();

        $group->shortHandAnimation()
                ->setName("my_move")
                ->setDuration(5)
                ->setTimming_function("infinite")
                ->keyFrame()
                ->percent(0)
                ->setBackgroundColor("red")
                ->setLeft(0)
                ->setTop(0)
                ->percent(25)
                ->setBackgroundColor("yellow")
                ->setLeft(200)
                ->setTop(0)
                ->percent(50)
                ->setBackgroundColor("blue")
                ->setLeft(200)
                ->setTop(200)
                ->percent(75)
                ->setBackgroundColor("green")
                ->setLeft(0)
                ->setTop(200)
                ->percent(100)
                ->setBackgroundColor("red")
                ->setLeft(0)
                ->setTop(0)
                ->load_animation();


        $group_2->shortHandAnimation()
                ->setName("my_new_move")
                ->setDuration(5)
                ->setTimming_function("infinite")
                ->keyFrame()
                ->percent(0)
                ->setBackgroundColor("blue")
                ->setLeft(0)
                ->setTop(10)
                ->percent(25)
                ->setBackgroundColor("red")
                ->setLeft(300)
                ->setTop(10)
                ->percent(50)
                ->setBackgroundColor("green")
                ->setLeft(300)
                ->setTop(300)
                ->percent(75)
                ->setBackgroundColor("yellow")
                ->setLeft(180)
                ->setTop(200)
                ->percent(100)
                ->setBackgroundColor("blue")
                ->setLeft(200)
                ->setTop(10)
                ->load_animation();


        $group_3->shortHandAnimation()
                ->setName("my_new_next_move")
                ->setDuration(5)
                ->setTimming_function("infinite")
                ->keyFrame()
                ->percent(0)
                ->setBackgroundColor($this->rand_color())
                ->setRigth(200)
                ->setTop(70)
                ->percent(25)
                ->setBackgroundColor($this->rand_color())
                ->setRigth(300)
                ->setTop(10)
                ->percent(50)
                ->setBackgroundColor($this->rand_color())
                ->setRigth(300)
                ->setTop(200)
                ->percent(75)
                ->setBackgroundColor($this->rand_color())
                ->setRigth(50)
                ->setTop(200)
                ->percent(100)
                ->setBackgroundColor($this->rand_color())
                ->setRigth(200)
                ->setTop(80)
                ->load_animation();


        $group_4->shortHandAnimation()
                ->setName("my_new_next_move_4")
                ->setDuration(5)
                ->setTimming_function("linear")
                ->keyFrame()
                ->setAnimation_from()
                ->setBackgroundColor($this->rand_color())
                ->setRigth(200)
                ->setTop(70)
                ->setAnimation_to()
                ->setBackgroundColor($this->rand_color())
                ->setRigth(300)
                ->setTop(10)
                ->load_animation();

        $group_4->actionHandler()
                ->click()
                ->dialogBox()
                ->setStyle("jquery")
                ->setMessage("I am a " . $group_4->getField_id())
                ->display();

        $group_3->setCursor("pointer")
                ->actionHandler()
                ->click()
                ->change()
                ->stopRestartAnimation()
                ->setBackgroundColor("red")
                ->setHtmlContent("<p style = \"color:white\">hello there</p>")
                ->loadChange();


        // $this->viewController()->add($group);
        // $this->viewController()->add($group_2);
        // $this->viewController()->add($group_3);
        //$this->viewController()->add($group_4);
        //end animation property

        /* ##########################################
         * start testing backface-visibility property
         * ##########################################
         */

        $backface_div1 = new MyGroup();

        $backface_div1->setBackgroundColor("blue")
                ->setContent("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.")
                ->setWidth(200)
                ->setColor("white")
                ->setBackface_visibility("hidden")
                ->setHeight(200)
                ->Border()
                ->Bottom()
                ->setRight_radius("2em")
                ->setLeft_radius("2em");

        $backface_div1->getText()
                ->setAlign("justify");

        $backface_div2 = new MyGroup();

        $backface_div2->setBackgroundColor("red")
                ->setContent("i am div 2")
                ->setWidth(200)
                ->setHeight(200)
                ->setBackface_visibility("visible")
                ->Margin()
                ->setTop(100);

        $this->viewController()->add($backface_div1);
        // $this->viewController()->add($backface_div2);
        //end backface-visibility property

        /* ##########################################
         * start testing backface-visibility property
         * ##########################################
         */

        $background = new MyGroup();

        $background->setContent("Here, the background image is repeated only vertically.")
                ->Background()
                ->setPath("image")
                ->add_image("img_orange_flowers")
                ->setRepeat("repeat-y");



        $this->viewController()->add($background);
        //end background property

        /* ##########################################
         * start testing border style
         * ##########################################
         */
        $border = new MyParagrapth();

//        $border->setContent("This is some text in a paragraph.")
//                ->setCenter(true)
//                ->Border()
//                ->setColor("blue")
//                ->setStyle("solid")
//                ->Bottom()
//                ->setColor("red")
//                ->setStyle("dotted");


        $border->setContent("This is some text in a paragraph.")
                ->setPadding("15px")
                ->setBorder("10px solid transparent")
                ->Border()
                ->setPath("image")
                ->add_image("border", "30 round");


        // ->setBottom("thick dotted #ff0000");

        $header_1 = new FirstHeader();

        $header_1->setContent("A heading with a colored bottom border")
                ->Border()
                ->setPath("image")
                ->add_image("border", "30 round")
                ->Bottom()
                ->setColor("coral")
                ->setWidth("thin")
                ->setStyle("solid");

        $this->viewController()->add($header_1);
        $this->viewController()->add($border);

        /* ##########################################
         * start testing border image
         * ##########################################
         */
        $border_image = new MyParagrapth();

        $border_image
                ->setBorder("15px solid transparent")
                ->setPadding(15)
                ->setContent("Hello")
                ->Border()
                ->Image()
                ->setWidth("10")
                ->setPath("image")
                ->setRepeat("strech")
                ->setSlice(30)
                ->setSource("border");

        $this->viewController()->add($border_image);


        //end border image property

        /* ##########################################
         * start testing border left
         * ##########################################
         */
        $border_left = new MyParagrapth();

        $border_left
                ->setContent("This is some text in a paragraph")
                ->Border()
                ->setStyle("solid")
                ->setLeft("thick double #ff0000");

        $this->viewController()->add($border_left);


        $border_left_child = new MyParagrapth();

        $border_left_child->setContent("The border-left-color can be specified with a color name.")
                ->Border()
                ->setStyle("solid")
                ->Left()
                ->setColor("coral")
                ->setStyle("dotted")
                ->setWidth("thin");

        $this->viewController()->add($border_left_child);

        //end border left property



        /* ##########################################
         * start testing border right
         * ##########################################
         */
        $border_right = new MyParagrapth(array("content" => "This is some text in a paragraph."));

        $border_right->Border()
                ->setStyle("solid")
                ->setRigth("thick double #ff0000");

        $this->viewController()->add($border_right);

        $border_right_child = new MyParagrapth(array("content" => "The border-right-color can be specified with a color name."));

        $border_right_child
                ->Border()
                ->setStyle("solid")
                ->Right()
                ->setStyle("dotted")
                ->setWidth("thin")
                ->setColor("coral");

        $this->viewController()->add($border_right_child);
        //end border right property

        /* ##########################################
         * start testing border spacing
         * ##########################################
         */

        $table = new MyTable();

        $table->setEmpty_cells("hide")
                ->setLayout("fixed")
                ->createListTr(3)
                ->setBorder("1px")
                ->Border()
                ->setSpacing("10px 50px")
                ->setCollapse("separate");

        $table->Caption()
                ->setSide("bottom")
                ->setContent("Table 1.1 Customers");

        $table->forTrAtPosition(0)
                ->addArrayTd(array("Peter", "Griffin"));

        $table->forTrAtPosition(1)
                ->addArrayTd(array("Glenn", "Quagmire"));

        //implementation of empty-cells property
        $table->forTrAtPosition(2)
                ->addArrayTd(array("Glenn", ""));

        $this->viewController()->add($table);
        //end border spacing property

        /* ##########################################
         * start testing border top
         * ##########################################
         */

        $border_top = new MyParagrapth();

        $border_top->setContent("This is some text in a paragraph.")
                ->Border()
                ->setTop("thick double #ff0000")
                ->setStyle("solid");

        $this->viewController()->add($border_top);

        $border_top_child = new MyParagrapth();

        $border_top_child->setContent("he border-top-color can be specified with a color name.")
                ->setBorder("2px solid")
                ->setPadding(10)
                ->Border()
                ->setStyle("solid")
                ->Top()
                ->setColor("coral")
                ->setStyle("dotted")
                ->setWidth("thin")
                ->setRight_radius("2em")
                ->setLeft_radius("2em");

        $this->viewController()->add($border_top_child);

        //end border top property

        /* ##########################################
         * start testing box-shadow
         * ##########################################
         */
        $box_shadow = new MyGroup();

        $box_shadow->setWidth("300")
                ->setHeight(100)
                ->setBackgroundColor("yellow")
                ->setBox_shadow("10px 10px 5px #888888")
                ->addBreak()
                ->addBreak();
        $this->viewController()->add($box_shadow);
        //end box-shadow property

        /* ##########################################
         * start testing box-sizing
         * ##########################################
         */
        $box_sizing_1 = new MyGroup();
        $box_sizing_1->setContent("This div is smaller (width is 300px and height is 100px).")
                ->setWidth(300)
                ->setHeight(100)
                ->setBorder("1px solid blue")
                ->addBreak();


        $this->viewController()->add($box_sizing_1);

        $box_sizing_2 = new MyGroup();
        $box_sizing_2->setContent("This div is bigger (width is also 300px and height is 100px).")
                ->setWidth(300)
                ->setPadding(50)
                ->setHeight(100)
                ->setBorder("1px solid red")
                ->addBreak();


        $this->viewController()->add($box_sizing_2);

        $box_sizing_3 = new MyGroup();
        $box_sizing_3->setContent("Both divs are the same size now!")
                ->setWidth(300)
                ->setHeight(100)
                ->setBorder("1px solid blue")
                ->addBreak()
                ->setBox_sizing("border-box");


        $this->viewController()->add($box_sizing_3);
        //end box-sizing property

        /* ##########################################
         * start testing clear
         * ##########################################
         */
        $clear_para1 = new MyParagrapth();
        $clear_para2 = new MyParagrapth();
        $clear_img = new MyImage();

        $clear_img->setPath("image")
                ->setWidth(95)
                ->setHeight(84)
                ->setFloat("left")
                ->setImage_name("logocss");

        $clear_para1->setContent("This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.");

        $clear_para2
                ->setClear("both")
                ->setContent("This is also some text. This is also some text. This is also some text. This is also some text. This is also some text. This is also some text.");

        $this->viewController()->add($clear_img);
        $this->viewController()->add($clear_para1);
        $this->viewController()->add($clear_para2);

        //end clear property

        /* ##########################################
         * start testing image clip
         * ##########################################
         */
        $clip_img = new MyImage();

        $clip_img->setPath("image")
                ->setWidth(95)
                ->setHeight(84)
                ->clipImage(0, 50, 100, 0)
                ->setImage_name("w3css")
                ->addBreak();

        $this->viewController()->add($clip_img);
        //end image clip property

        /* ##########################################
         * start testing column clip
         * ##########################################
         */
        $column_group = new MyGroup();

        $column_group
                ->Margin()
                ->setTop(100);


        $column_group->setContent("Lorem ipsum dolor sit amet, consectetuer adipiscing "
                        . "elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna "
                        . "aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci "
                        . "tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. "
                        . "Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie "
                        . "consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan "
                        . "et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis "
                        . "dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend "
                        . "option congue nihil imperdiet doming id quod mazim placerat facer possim assum. "
                        . "Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. "
                        . "Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.")
                ->Column()
                ->setGap(40)
                ->setRule(4, "outset", "red")
                ->setCount(3);

        $this->viewController()->add($column_group);


        $column_group_child = new MyGroup();

        $column_group_child
                ->Margin()
                ->setTop(50);


        $column_group_child->setContent("Lorem ipsum dolor sit amet, consectetuer adipiscing "
                        . "elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna "
                        . "aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci "
                        . "tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. "
                        . "Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie "
                        . "consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan "
                        . "et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis "
                        . "dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend "
                        . "option congue nihil imperdiet doming id quod mazim placerat facer possim assum. "
                        . "Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. "
                        . "Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.")
                ->Column()
                ->setWidth("20px")
                ->setSpan("all")
                ->setCount(3)
                ->Rule()
                ->setStyle("outset")
                ->setWidth("10px")
                ->setColor("green");

        $this->viewController()->add($column_group_child);



        $column_group_inline = new MyGroup();

        $column_group_inline->setContent("Lorem ipsum dolor sit amet, consectetuer adipiscing "
                        . "elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna "
                        . "aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci "
                        . "tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. "
                        . "Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie "
                        . "consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan "
                        . "et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis "
                        . "dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend "
                        . "option congue nihil imperdiet doming id quod mazim placerat facer possim assum. "
                        . "Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. "
                        . "Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.")
                ->setColumn("100px", "4")
                ->Margin()
                ->setTop(50);


        $this->viewController()->add($column_group_inline);
        //end column property

        /* ##########################################
         * start testing content
         * ##########################################
         */

        $content = new MyGroup();

        $content->setContent("This is my DIV element.")
                ->Content()
                ->before()
                ->setContent("But you already knew that.")
                ->setColor("red")
                ->load()
                ->Content()
                ->after()
                ->setContent("But you already knew that.")
                ->setColor("blue")
                ->load();

        $this->viewController()->add($content);

        $content_menu = new MyUL();

        $content_menu->createNumberOfLiTag(3)
                ->setList_style_type("none");

        $content_menu->getInitiateList(0)
                ->setContent("Coffee");

        $content_menu->getInitiateList(1)
                ->setContent("Tea");

        $content_menu->getInitiateList(2)
                ->setContent("Coca Cola");

        //apply before css to all li element tag you can uncomment this line to view the effect
        // $this->view()->addGenerateContenToElement("li", ".", "before", array("color" => "blue", "padding-right" => "8px", "font-size" => "2em"));

        $this->viewController()->add($content_menu);


        $link = new Link();

        $link->setHref("https://www.w3schools.com")
                ->setContent("W3Schools");

        $this->view()->addGenerateContenToElement("a", " (' attr(href) ')", "after");

        $this->viewController()->add($link);

        //end content property

        /* ##########################################
         * start testing counter
         * ##########################################
         */
        $this->view()->setCounter_reset("section");

        $counter_hearder_1 = new FirstHeader();

        $counter_hearder_1->setContent("HTML tutorials")
                ->setCounter_reset("subsection")
                ->Content()
                ->before()
                ->setCounter_increment("section")
                ->setContent("Section ")
                ->setCounter("section", ". ")//use of counter element in the counter
                ->useElement_tag("h1")
                ->load();


        $counter_hearder_2 = new SecondHeader();

        $counter_hearder_2->setContent("HTML tutorial")
                ->Content()
                ->setCounter_increment("subsection")
                ->setCounter("section", ".")
                ->setCounter("subsection", " ")
                ->before()
                ->useElement_tag("h2")
                ->load();


        $counter_hearder_2_2 = new SecondHeader();

        $counter_hearder_2_2->setContent("XHTML tutorial");

        $counter_hearder_2_3 = new SecondHeader();

        $counter_hearder_2_3->setContent("CSS tutorial");



        $counter_hearder_1_1 = new FirstHeader();

        $counter_hearder_1_1->setContent("Scripting tutorials");

        $counter_hearder_3 = new SecondHeader();

        $counter_hearder_3->setContent("JavaScript");

        $counter_hearder_3_2 = new SecondHeader();

        $counter_hearder_3_2->setContent("VBScript");



        $counter_hearder_1_2 = new FirstHeader();

        $counter_hearder_1_2->setContent("XML tutorials");

        $counter_hearder_4 = new SecondHeader();

        $counter_hearder_4->setContent("XML");

        $counter_hearder_4_2 = new SecondHeader();

        $counter_hearder_4_2->setContent("XSL");


        $this->viewController()->add($counter_hearder_1);
        $this->viewController()->add($counter_hearder_2);
        $this->viewController()->add($counter_hearder_2_2);
        $this->viewController()->add($counter_hearder_2_3);
        $this->viewController()->add($counter_hearder_1_1);
        $this->viewController()->add($counter_hearder_3);
        $this->viewController()->add($counter_hearder_3_2);
        $this->viewController()->add($counter_hearder_1_2);
        $this->viewController()->add($counter_hearder_4);
        $this->viewController()->add($counter_hearder_4_2);
        //end counter property

        /* ##########################################
         * start testing filter
         * ##########################################
         */

        $filter_img = new MyImage();

        $filter_name = array("grayscale");

        $filter_value = array("100%");

        $filter_img->setSrc("https://www.w3schools.com/cssref/pineapple.jpg")
                ->setAlternateTitle("pineapple")
                ->setFilter($filter_name, $filter_value);


        $this->viewController()->add($filter_img);

        //end filter property

        /* ##########################################
         * start testing flex
         * ##########################################
         */
        $main = new MyGroup();

        $red = new MyGroup();
        $blue = new MyGroup();
        $green = new MyGroup();
        $khaki = new MyGroup();
        $pink = new MyGroup();
        $grey = new MyGroup();



        $main->setWidth("220")
                ->setHeight(300)
                ->setBorder("1px solid black")
                ->setDisplay("flex");

        $red->setBackgroundColor("coral")
                ->setContent("RED");

        $blue->setBackgroundColor("lightblue")
                ->setContent("BLUE");

        $green->setBackgroundColor("lightgreen")
                ->setContent("Green div with more content.");

        $khaki->setBackgroundColor("khaki");

        $pink->setBackgroundColor("pink");

        $grey->setBackgroundColor("lightgrey");


        $main->addWidget($red)
                ->addBreak()
                ->addWidget($blue)
                ->addWidget($green)
                ->Childs("div")
                ->setFlex(1)
                ->load();


        $main_child = new MyGroup();

        $main_child->setWidth("200")
                ->setHeight(150)
                ->setBorder("1px solid #c3c3c3")
                ->setDisplay("flex");

        $child_properties = new HtmlAttribute();

        $child_properties->Flex()
                ->setBasis("40px")
                ->setGrow(0)
                ->setShrink(0);

        $child_properties_nth = new HtmlAttribute();

        $child_properties_nth->Flex()
                ->setBasis("100px");

        $flex_direction = new HtmlAttribute();

        $flex_direction->Flex()
                ->setBasis("50px");
        // ->setDirection("row-reverse");

        $flex_flow = new HtmlAttribute();

        $flex_flow->Flex()
                ->setBasis("180px")
                ->setFlow("row-reverse wrap");


        // $main_child->Flex()
        //         ->setDirection("row-reverse");

        $main_child->Flex()
                ->setFlow("row-reverse wrap");

        $main_child->addWidget($red)
                ->addWidget($blue)
                ->addWidget($khaki)
                ->addWidget($pink)
                ->addWidget($grey)
                ->Childs("div")
                ->Properties($flex_direction)
                ->setNthType($child_properties_nth, 2)
                ->load();



        $this->viewController()->add($main);
        $this->viewController()->add($main_child);
        //end flex property

        /* ##########################################
         * start testing font
         * ##########################################
         */
        $font_para_1 = new MyParagrapth();

        $font_para_2 = new MyParagrapth();

        $font_para_3 = new MyParagrapth();

        $font_para_1->setContent("This is a paragraph, shown in the Times New Roman font.")
                ->Font()
                ->setFamily("serif", array("Times New Roman", "Times"));

        $font_para_2->setContent("This is a paragraph, shown in the Arial font.")
                ->Font()
                ->setFamily("sans-serif", array("Arial", "Helvetica"));

        $font_para_3->setContent("This is some text with font kerning.")
                ->Font()
                ->setKerning("normal")
                ->setSize("250%")
                ->setSize_adjust("0.58")
                ->setStretch("expanded")
                ->setVariant("small-caps")
                ->setWeight("bold")
                ->setFamily("serif");


        $this->viewController()->add($font_para_1);
        $this->viewController()->add($font_para_2);
        $this->viewController()->add($font_para_3);
        //end font property


        /* ##########################################
         * start testing justify-content
         * ##########################################
         */

        $jsutify = new MyGroup();

        $red_jsutify = new MyGroup();
        $blue_jsutify = new MyGroup();
        $green_jsutify = new MyGroup();
        $khaki_jsutify = new MyGroup();
        $pink_jsutify = new MyGroup();
        $grey_jsutify = new MyGroup();



        $jsutify->setWidth("400px")
                ->setHeight("150px")
                ->setBorder("1px solid #c3c3c3")
                ->setJustify_content("space-around")
                ->setDisplay("flex");

        $red_jsutify->setBackgroundColor("coral")
                ->setContent("RED");

        $blue_jsutify->setBackgroundColor("lightblue")
                ->setContent("BLUE");

        $green_jsutify->setBackgroundColor("lightgreen")
                ->setContent("Green div with more content.");

        $khaki_jsutify->setBackgroundColor("khaki");

        $pink_jsutify->setBackgroundColor("pink");

        $grey_jsutify->setBackgroundColor("lightgrey");


        $jsutify->addWidget($red_jsutify)
                ->addBreak()
                ->addWidget($blue_jsutify)
                ->addWidget($green_jsutify)
                ->addWidget($pink_jsutify)
                ->Childs("div")
                ->setWidth("70px")
                ->setHeight("70px")
                ->load();

        $this->viewController()->add($jsutify);
        //end justify-content property

        /* ##########################################
         * start testing letter-spacing
         * ##########################################
         */
        $letter_spacing_1 = new FirstHeader();

        $letter_spacing_2 = new SecondHeader();

        $letter_spacing_1->setContent("This is heading 1")
                ->setLetter_spacing("2px");

        $letter_spacing_2->setContent("This is heading 2")
                ->setLetter_spacing("-3px");

        $this->viewController()->add($letter_spacing_1);
        $this->viewController()->add($letter_spacing_2);
        //end letter-spacing property


        /* ##########################################
         * start testing line-height
         * ##########################################
         */
        $line_height_1 = new MyParagrapth();
        $line_height_2 = new MyParagrapth();
        $line_height_3 = new MyParagrapth();



        $line_height_1->setContent("This is a paragraph with a standard line-height.<br>This 
            is a paragraph with a standard line-height.<br>
            The default line height in most browsers is about 110% to 120%.")
                ->addClass("line_1")
                ->addClass("line_2")
                ->addData("login", "true")
                ->addData("roles", "admin");

        $line_height_2->setContent("This is a paragraph with a smaller line-height.<br>
            This is a paragraph with a smaller line-height.<br>This is a paragraph with 
            a smaller line-height.<br>This is a paragraph with a smaller line-height.<br>")
                ->setLine_height("70%");

        $line_height_3->setContent("This is a paragraph with a bigger line-height.<br>
            This is a paragraph with a bigger line-height.<br>This is a paragraph 
            with a bigger line-height.<br>This is a paragraph with a bigger line-height.<br>")
                ->setLine_height("20%");


        $this->viewController()->add($line_height_1);
        $this->viewController()->add($line_height_2);
        $this->viewController()->add($line_height_3);
        //end line-height property

        /* ##########################################
         * start testing list-style
         * ##########################################
         */
        $main_list_image = new MyUL();

        //implementation with customize image
        $main_list_image->createNumberOfLiTag(3)
                ->ListSyle()
                ->add_external_image("https://www.w3schools.com/cssref/sqpurple.gif")
                ->setPosition("inside");

        $main_list_image->getInitiateList(0)
                ->setContent("Coffee");

        $main_list_image->getInitiateList(1)
                ->setContent("Tea");

        $main_list_image->getInitiateList(2)
                ->setContent("Coca Cola");


        $main_list = new MyUL();

        $main_list->createNumberOfLiTag(3)
                ->ListSyle()
                ->setType("circle")
                ->setPosition("inside");

        $main_list->getInitiateList(0)
                ->setContent("Coffee");

        $main_list->getInitiateList(1)
                ->setContent("Tea");

        $main_list->getInitiateList(2)
                ->setContent("Coca Cola");

        $this->viewController()->add($main_list);

        $this->viewController()->add($main_list_image);
        //end list style property


        /* ##########################################
         * start testing max height and max width
         * ##########################################
         */
        $max_height_paragrath = new MyParagrapth();

        $max_height_paragrath->setContent("The maximum height of this paragraph is set to 50px. The maximum height of "
                        . "this paragraph is set to 50px. The maximum height of this paragraph is set to 50px. "
                        . "The maximum height of this paragraph is set to 50px. The maximum height of this paragraph "
                        . "is set to 50px. The maximum height of this paragraph is set to 50px. The maximum height of "
                        . "this paragraph is set to 50px. The maximum height of this paragraph is set to 50px. "
                        . "The maximum height of this paragraph is set to 50px. The maximum height of this paragraph is "
                        . "set to 50px.")
                ->setMax_height(50)
                ->setBackgroundColor("yellow")
                ->setOverflow("auto");



        $this->viewController()->add($max_height_paragrath);

        $max_width_paragrath = new MyParagrapth();

        $max_width_paragrath->setContent("The maximum width of this paragraph is set to 100px.")
                ->setMax_width(100)
                ->setBackgroundColor("yellow");

        $this->viewController()->add($max_width_paragrath);

        //end max height and max width property

        /* ##########################################
         * start testing min height and min width
         * ##########################################
         */

        $min_height_paragrath = new MyParagrapth();

        $min_height_paragrath->setContent("The minimum height of this paragraph is set to 100px.")
                ->setMin_height(100)
                ->setBackgroundColor("yellow");

        $this->viewController()->add($min_height_paragrath);

        $min_width_paragrath = new MyParagrapth();

        $min_width_paragrath->setContent("The maximum width of this paragraph is set to 100px.")
                ->setMin_width(150)
                ->setBackgroundColor("yellow");

        $this->viewController()->add($min_width_paragrath);


        //end min height and min width property

        /* ##########################################
         * start testing min height and min width
         * ##########################################
         */
        $object_fit_img = new MyImage();

        $object_fit_h2 = new SecondHeader();

        $object_fit_para = new MyParagrapth();

        $object_fit_h2->setContent("The object-fit Property");

        $object_fit_para->setContent("Cut off the sides of the image, preserving "
                . "the aspect ratio, and also filling in the space:");

        $object_fit_img->setSrc("https://www.w3schools.com/cssref/paris.jpg")
                ->setWidth(200)
                ->setHeight(400)
                ->setAlternateTitle("Paris")
                ->setObject_fit("cover");

        $this->viewController()->add($object_fit_h2);
        $this->viewController()->add($object_fit_para);
        $this->viewController()->add($object_fit_img);
        //end object-fit property

        /* ##########################################
         * start testing opacity
         * ##########################################
         */
        $opacity = new MyGroup();

        $opacity->setContent("This element's opacity is 0.5! "
                        . "Note that both the text and the background-color are "
                        . "affected by the opacity level!")
                ->setBackgroundColor("red")
                ->setOpacity(0.5)
                ->setFilter(array("Alpha"), array("opacity=50"));


        $this->viewController()->add($opacity);
        //end opacity property

        /* ##########################################
         * start testing order
         * ##########################################
         */

        $main_order = new MyGroup();

        $red_order = new MyGroup();
        $blue_order = new MyGroup();
        $green_order = new MyGroup();
        $khaki_order = new MyGroup();
        $pink_order = new MyGroup();
        $grey_order = new MyGroup();



        $main_order->setWidth("400px")
                ->setHeight("150px")
                ->setBorder("1px solid #c3c3c3")
                ->setJustify_content("space-around")
                ->setDisplay("flex");

        $red_order->setBackgroundColor("coral")
                ->setOrder(2)
                ->setContent("RED");

        $blue_order->setBackgroundColor("lightblue")
                ->setOrder(4)
                ->setContent("BLUE");

        $green_order->setBackgroundColor("lightgreen")
                ->setOrder(3)
                ->setContent("Green div with more content.");

        $khaki_order->setBackgroundColor("khaki");

        $pink_order
                ->setOrder(1)
                ->setBackgroundColor("pink");

        $grey_order->setBackgroundColor("lightgrey");


        $main_order->addWidget($red_order)
                ->addWidget($blue_order)
                ->addWidget($green_order)
                ->addWidget($pink_order)
                ->Childs("div")
                ->setWidth("70px")
                ->setHeight("70px")
                ->load();

        $main_order->Margin()
                ->setTop(50);

        $this->viewController()->add($main_order);
        //end order property


        /* ##########################################
         * start outline order
         * ##########################################
         */
        $outline = new MyParagrapth();

        $outline->setContent("Note: IE8 supports the outline properties only if a !DOCTYPE is specified.")
                ->setBorder("1px solid red")
                ->setOutline("green dotted thick")
                ->addBoldTag()
                ->setSearch_text("Note");
        $this->viewController()->add($outline);


        $outline_object = new MyParagrapth();

        $outline_object->setContent("A green dotted outline.")
                ->setBorder("1px solid red")
                ->Outline()
                ->setStyle("dotted")
                ->setColor("#00ff00");


        $outline_object_2 = new MyParagrapth();

        $outline_object_2->Margin()
                ->setTop("30px");

        $outline_object_2->setContent("A thick red outline.")
                ->setBorder("1px solid black")
                ->Outline()
                ->setStyle("solid")
                ->setWidth("10px")
                ->setColor("red");

        $outline_object_3 = new MyParagrapth();

        $outline_object_3->Margin()
                ->setTop("30px");

        $outline_object_3->setContent("A thin green outline.")
                ->setBorder("1px solid black")
                ->Outline()
                ->setStyle("solid")
                ->setWidth("thin")
                ->setColor("green");

        $outline_object_4 = new MyGroup();

        $outline_object_4
                ->Margin()
                ->setTop("30px")
                ->setBottom("30px")
                ->setLeft("20px")
                ->setRight("30px");

        $outline_object_4->setContent("This div has an outline border 15px outside the border edge.")
                ->setBorder("2px solid black")
                ->setOutline("2px solid red")
                ->Outline()
                ->setOffset("15px");

        $this->viewController()->add($outline_object);
        $this->viewController()->add($outline_object_2);
        $this->viewController()->add($outline_object_3);
        $this->viewController()->add($outline_object_4);
        //end outline property

        /* ##########################################
         * start perspective style
         * ##########################################
         */
        $this->view()->createMainDivWithChild(3, array(1, 1, 1));


        $this->view()->forDivAt("0")
                ->Margin()
                ->setTop("50px");

        $this->view()->forDivAt(0)
                ->setPosition("relative")
                ->setHeight("150px")
                ->setWidth("150px")
                ->setMargin("50px")
                ->setPadding("10px")
                ->setBorder("1px solid black")
                ->setPerspective("150px");

        //Perspective-origin implementation
        $this->view()->forDivAt(0)
                ->setPosition("relative")
                ->setHeight("150px")
                ->setWidth("150px")
                ->setMargin("50px")
                ->setPadding("10px")
                ->setBorder("1px solid black")
                ->setPerspective_origin("10% 10%");

        $this->view()->forDivAt("0=>0")
                ->setContent("HELLO")
                ->setPadding("50px")
                ->setPosition("absolute")
                ->setBorder("1px solid black")
                ->setBackgroundColor("red")
                ->setTransform("rotateX(45deg)");

        // $this->view()->loadCreateWidget();
        //end perspective property


        /* ##########################################
         * start transform origin and style
         * ##########################################
         */

        //transform origin

        $this->view()->forDivAt(1)
                ->setPosition("relative")
                ->setHeight("200px")
                ->setWidth("200px")
                ->setMargin("100px")
                ->setPadding("10px")
                ->setBorder("1px solid black");


        $this->view()->forDivAt("1=>0")
                ->setContent("Transform")
                ->setPadding("50px")
                ->setPosition("absolute")
                ->setBorder("1px solid black")
                ->setBackgroundColor("red")
                ->setTransform("rotate(45deg)")
                ->setTransform_origin("20% 40%");

        //transform style

        $this->view()->forDivAt(2)
                ->setPosition("relative")
                ->setHeight("200px")
                ->setWidth("200px")
                ->setMargin("100px")
                ->setPadding("10px")
                ->setBorder("1px solid black");


        $this->view()->forDivAt("2=>0")
                ->setContent("Transform")
                ->setPadding("50px")
                ->setPosition("absolute")
                ->setBorder("1px solid black")
                ->setBackgroundColor("red")
                ->setTransform("rotateY(60deg)")
                ->setTransform_style("preserve-3d");

        $transform_style = new MyGroup();

        $transform_style->setContent("Transform Yellow")
                ->setPadding("40px")
                ->setPosition("absolute")
                ->setBorder("1px solid black")
                ->setTransform("rotateY(-60deg)")
                ->setBackgroundColor("yellow");

        $this->view()->forDivAt("2=>0")
                ->addWidget($transform_style);

        $this->view()->loadCreateWidget();

        //end transform property


        /* ##########################################
         * start transition
         * ##########################################
         */
        $transition = new MyGroup();

        $transition->setWidth("100")
                ->setHeight("100px")
                ->setTransition("width 2s")
                ->setBackgroundColor("red")
                ->addComment("Transition implementation")
                ->setCursor("pointer")
                ->OnHover()
                ->setWidth("300")
                ->load();

        //transition delay
        $transition_delay = new MyGroup();

        $transition_delay->Margin()
                ->setTop("10px");

        $transition_delay->Transition()
                ->setDelay("5s")
                ->setDuration("5s")
                ->setTransition_property("width");

        $transition_delay->setWidth("100")
                ->setHeight("100px")
                ->setBackgroundColor("red")
                ->addComment("Transition delay implementation")
                ->setCursor("pointer")
                ->OnHover()
                ->setWidth("300")
                ->load();

        //transition timming-function
        $transition_timming = new MyGroup();

        $transition_timming->Margin()
                ->setTop("10px");

        $transition_timming->Transition()
                ->setTimming_function("linear");

        $transition_timming->setWidth(100)
                ->setHeight(100)
                ->setTransition("width 2s")
                ->setBackgroundColor("red")
                ->addComment("Transition timming function implementation")
                ->setCursor("pointer")
                ->OnHover()
                ->setWidth("300")
                ->load();

        $this->viewController()->add($transition);
        $this->viewController()->add($transition_delay);
        $this->viewController()->add($transition_timming);
        //end transition property

        /* ##########################################
         * start unicode-bidi
         * ##########################################
         */
        $unicode_bidi_1 = new MyGroup();
        $unicode_bidi_2 = new MyGroup();

        $unicode_bidi_1->setContent("Some text. Default writing direction.");

        $unicode_bidi_2->setContent("Some text. Right-to-left direction.")
                ->setDirection("rtl")
                ->setUnicode_bidi("bidi-override")
                ->useHeaderStyle();

        $this->viewController()->add($unicode_bidi_1);
        $this->viewController()->add($unicode_bidi_2);
        //end unicode-bidi property

        /* ##########################################
         * start user-select
         * ##########################################
         */
        $user_select = new MyGroup();

        $user_select->setContent("The text of this div element cannot be selected."
                        . " If you double-click me, my text will not be highlighted.")
                ->setUser_select("none")
                ->Margin()
                ->setTop(40);


        $this->viewController()->add($user_select);
        //end user-select property

        /* ##########################################
         * start vertical-align
         * ##########################################
         */

        //text-top
        $vertical_align_para_top = new MyParagrapth();

        $vertical_align_img_top = new MyImage();


        $vertical_align_para_top->setContent("An image with a text-top alignment.");


        $vertical_align_img_top->setSrc("https://www.w3schools.com/cssref/w3schools_logo.gif")
                ->setInto_paragrath(false)
                ->setVertical_align("text-top");

        $vertical_align_para_top->addWidgetImageBeforeText($vertical_align_img_top, "image with a text-top alignment.");

        $this->viewController()->add($vertical_align_para_top);

        //text-bottom
        $vertical_align_para_bottom = new MyParagrapth();

        $vertical_align_img_bottom = new MyImage();

        $vertical_align_para_bottom->setContent("An image with a text-bottom alignment.");

        $vertical_align_img_bottom->setSrc("https://www.w3schools.com/cssref/w3schools_logo.gif")
                ->setInto_paragrath(false)
                ->setVertical_align("text-bottom");

        $vertical_align_para_bottom->addWidgetImageBeforeText($vertical_align_img_bottom, "image with a text-bottom alignment.");

        $this->viewController()->add($vertical_align_para_bottom);


        //default
        $vertical_align_para = new MyParagrapth();

        $vertical_align_img = new MyImage();

        $vertical_align_para->setContent("An image with a default alignment.");

        $vertical_align_img->setSrc("https://www.w3schools.com/cssref/w3schools_logo.gif")
                ->setInto_paragrath(false);

        $vertical_align_para->addWidgetImageBeforeText($vertical_align_img, "image with a default alignment.");

        $this->viewController()->add($vertical_align_para);

        //end vertical-align property

        /* ##########################################
         * start visibility
         * ##########################################
         */
        $visibility_header_1 = new FirstHeader();

        $visibility_header_2 = new FirstHeader();

        $visibility_header_1->setContent("This is a visible heading");

        $visibility_header_2->setContent("This is an invisible heading")
                ->setVisibility("hidden");


        $this->viewController()->add($visibility_header_1);
        $this->viewController()->add($visibility_header_2);
        //end visibility property


        /* ##########################################
         * start white-space
         * ##########################################
         */

        $white_space = new MyParagrapth();

        $white_space->setContent("This is some text. This is some text. This is some text.
            This is some text. This is some text. This is some text.
            This is some text. This is some text. This is some text.
            This is some text. This is some text. This is some text.")
                ->setWhite_space("nowrap");

        $this->viewController()->add($white_space);

        //end white-space property

        /* ##########################################
         * start z-index
         * ##########################################
         */

        $zindex_para = new MyParagrapth();

        $zindex_img = new MyImage();

        $zindex_h1 = new FirstHeader();

        $zindex_h1->setContent("This is a heading");


        $zindex_img->Margin()
                ->setTop("-60px");

        $zindex_img->setLeft(0)
                ->setSrc("https://www.w3schools.com/cssref/w3css.gif")
                ->setInto_paragrath(false)
                ->setZ_index("-1");


        $zindex_para->setContent("Because the image has a z-index of -1, it will be placed behind the text.");

        $this->viewController()->add($zindex_h1);
        $this->viewController()->add($zindex_img);
        $this->viewController()->add($zindex_para);
        //end z-index property

        /* ##########################################
         * start word
         * ##########################################
         */


        //break
        $word_break_keep_all = new MyParagrapth();

        $word_break_break_all = new MyParagrapth();

        $word_break_keep_all->setContent("This paragraph contains some text. This line will-break-at-hyphens.")
                ->setWidth("140px")
                ->setBorder("1px solid #000000")
                ->Word()
                ->setBreak("keep-all");

        $word_break_break_all->setContent("This paragraph contains some text. The lines will break at any character.")
                ->setWidth("140px")
                ->setBorder("1px solid #000000")
                ->Word()
                ->setBreak("break-all");

        $word_break_keep_all->Margin()
                ->setTop("40px");

        $this->viewController()->add($word_break_keep_all);
        $this->viewController()->add($word_break_break_all);

        //spacing
        $word_spacing = new MyParagrapth();

        $word_spacing->setContent("This is some text. This is some text.")
                ->Word()
                ->setSpacing("30px");

        $this->viewController()->add($word_spacing);

        //wrap
        $word_wrap = new MyParagrapth();

        $word_wrap->setContent("This paragraph contains a very long word: "
                        . "thisisaveryveryveryveryveryverylongword. "
                        . "The long word will break and wrap to the next line.")
                ->setWidth("11em")
                ->setBorder("1px solid #000000")
                ->Word()
                ->setWrap("break-word");

        $this->viewController()->add($word_wrap);

        //end word property

        $this->view()->setPage_title("Css properties style implementation");

        /* ##########################################
         * start grip properties
         * ##########################################
         */

        $this->view()->createMainDivWithChild(1, array(6));

        $this->view()->forDivAt(0)
                ->addClass("grid-container");

        $this->view()->forDivAt("0=>0")
                ->setContent("1")
                ->addClass("item1");

        $this->view()->forDivAt("0=>1")
                ->setContent("2")
                ->addClass("item2");

        $this->view()->forDivAt("0=>2")
                ->setContent("3")
                ->addClass("item3");

        $this->view()->forDivAt("0=>3")
                ->setContent("4")
                ->addClass("item4");

        $this->view()->forDivAt("0=>4")
                ->setContent("5")
                ->addClass("item5");

        $this->view()->forDivAt("0=>5")
                ->setContent("6")
                ->addClass("item6");


        $this->view()->loadCreateWidget();

        //end grip properties
    }

    /**
     * @RequestMapping( value=/css_media_query_properties)
     */
    function css_media_query_style_test() {


        $white_space = new MyParagrapth();

        $white_space->setContent("This is some text. This is some text. This is some text.
            This is some text. This is some text. This is some text.
            This is some text. This is some text. This is some text.
            This is some text. This is some text. This is some text.")
                ->setWhite_space("nowrap")
                ->setCenter(true);

        $media = new MyParagrapth();

        $media->setContent("This is some text with font kerning.")
                ->Font()
                ->setSize("250%")
                ->setWeight("bold")
                ->setFamily("serif")
                ->setKerning("normal")
                ->setStretch("expanded")
                ->setVariant("small-cap");

        $white_space->Media_query()
                ->Device()
                ->IphoneSamsungSmallScreen()
                ->setWhite_space("normal")
                ->setBackgroundColor("yellow")
                ->setColor("red")
                ->setWidth("100%");

        $white_space->Media_query()
                ->Device()
                ->TablePortraitMode()
                ->setWhite_space("normal")
                ->setBackgroundColor("blue")
                ->setColor("white")
                ->setWidth("100%");

        $media->Media_query()
                ->Device()
                ->TablePortraitMode()
                ->setColor("red")
                ->setWidth("100%");

        $new_device = $white_space->Media_query()
                ->createNewDevice();

        $media->Media_query()
                ->Device()
                ->useMediaQuery("screen and (max-width: 480px)")
                ->Font()
                ->setSize("100%");

        $new_device->viewPort("screen and (max-width: 480px)");

        $white_space->Media_query()
                ->Device()
                ->useMediaQuery("screen and (max-width: 480px)")
                ->setBackgroundColor("lightgreen");

        $this->viewController()->add($white_space);
        $this->viewController()->add($media);
    }

    /**
     * @RequestBody(value=/insert_data_detail)
     */
    function application_insert_data_details($test_db) {
        print_r($test_db);
    }

    /**
     * @RequestBody(value=/javascript_object)
     */
    function javascript_object() {
        /**
         * Create javascript code
         */
        $javascrit_code = $this->view()->createScript();

        $javascrit_code->addVar("list_user", "[]")
                ->addVar("user_name")
                ->addGlobalVar("e")
                ->createFunction("creatUser", "g_e")
                ->addVar("my_list")
                ->addedOnPageLoad()
                ->endFunction()
                ->addFuncComment("function useed to create a list of user that that are conneted to thsis system")
                ->createFunction("another_func")
                ->jsIf("false")
                ->addVar("current_condition")
                ->endJsIf()
                ->addVar("outside_func")
                ->addVar("list_connected", "[]")
                ->addComment("hello there this is a block comment")
                ->addVar("another_inline_var")
                ->onClickEvent("widget_650")
                ->jsAction("$(this).css('color','red');")
                ->jsAction("$(this).css('color','yellow');")
                ->jsAction("alert('You click me');")
                ->endEvent()
                ->onMouseOverEvent("widget_650")//when the user mouse over this object change color to red
                ->jsAction("$(this).css('color','red');")
                ->addComment("on mouse over change cursor to a pointer")
                ->jsAction("$(this).css('cursor','pointer');")
                ->endEvent()
                ->onMouseOutEvent("widget_650")
                ->jsAction("$(this).css('color','white');")
                ->endEvent()
                ->addVar("loop_index", "10")
                ->createVariableIfNotExists("loop_iter", "0")
                //   ->jsLoop("loop_index > 0")
                //  ->jsDecrement("loop_index")
                // ->addLoopContent("console.log(loop_index);")
                // ->endLoop()
                ->addedOnPageLoad()
                ->endFunction();
    }

    /**
     * @RequestBody(value=/login/check/,method=GET)
     */
    function application_login_check(Authentication $authentication) {

        //$this->response->map("success", false);
        //$post_data = $this->getJsModel();
        //print_r($post_data->getListValue());
        //$user_name = $post_data->get("username");
        $authentication->UseInterface(new TestDb);
        // $test_db->insert_multiple_data_into_table("username", "Malinda", "user_password", "malinda@28");
//        foreach ($test_db->getDataForTable() as $value) {
//            echo $value->getUser_password();
//        }
    }

    /**
     * @RequestMapping(value=/application/,method=GET)
     */
    function application() {

        echo "Hi there";

        // if (!$this->getPrincipal()->isEnable()) {
        //     $this->internalRedirect("login");
        //}
        // $this->getPrincipal()->getUsername();
        //$this->getPrincipal()->clearAuthentication();
        /**
         * Load css resources from the 
         * resources directory.
         * This folder must be added in the 
         * config.xml setting 
         */
        $this->addRessourcesCss("css", array("main"));

        /**
         * Load Javascript file from the configure resources
         * directory please 
         * @see RequestController::addRessourcesJs($resources_name)
         */
        $this->addRessourcesJs("js", array("main"));

        //represent the current html page interface
        $page = new Page();

        /**
         * start implementating all the object of the left menu 
         */
        $main_menu = new MyMenu(); //The left menu of the page

        $main_ul_list = new MyUL(); //The left menu ul tag

        $main_ul_list->setList_style_type("none");

        $class_element = new MyList();

        $class_element->add("menu_list");

        //Create 4 list elements 
        $main_ul_list->createNumberOfLiTag(8, array(
            "class" => $class_element,
            "padding_object" => array(
                "bottom" => 40
            ),
            "cursor" => "pointer"
                )
        );

        $main_ul_list->addClass("menu");

        $main_ul_list
                ->Margin()
                ->setTop(70);

        $main_ul_list
                ->Margin()
                ->setLeft(-30);

        $main_ul_list
                ->Padding()
                ->setBottom(10);

        $project_menu_title = new MySpan();

        $project_menu_title->setContent("Projects");

        $project_menu_title->actionHandler()
                ->click()
                ->dialogBox(array(
                    "message" => "In <span style=\"color:red\">Project</span>",
                    "style" => "jquery",
                    "color" => "white",
                    "backgroundColor" => "blue")
                )
                ->display();

        $project_menu_title->setColor("#e5e5e5");

        $project_menu = new MyUL();

        //Create 4 list elements 
        $project_menu->createNumberOfLiTag(3, array(
            "padding_object" => array(
                "bottom" => 20
            ),
            "margin_object" => array(
                "left" => "-20"
            ),
            "cursor" => "pointer"
                )
        );
        //$project_menu->setDisplay("none");

        $project_menu->setList_style_type("none");
        $project_menu->getInitiateList(0)
                ->setContent("Create");
        $project_menu->getInitiateList(0)
                ->setFaIcons()
                ->getFileO();
        $project_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $project_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setTop(10);
        $project_menu->getInitiateList(0)
                ->setColor("#e5e5e5");
        $project_menu->getInitiateList(1)
                ->setColor("#e5e5e5");
        $project_menu->getInitiateList(1)
                ->setContent("View");
        $project_menu->getInitiateList(1)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $project_menu->getInitiateList(1)
                ->setFaIcons()
                ->getEye();
        $project_menu->getInitiateList(2)
                ->setColor("#e5e5e5");
        $project_menu->getInitiateList(2)
                ->setContent("AssignTo");
        $project_menu->getInitiateList(2)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $project_menu->getInitiateList(2)
                ->setFaIcons()
                ->getSignIn();

        $email_menu = new MyUL();

        $email_menu->createNumberOfLiTag(3, array(
            "padding_object" => array(
                "bottom" => 20
            ),
            "margin_object" => array(
                "left" => "-20"
            ),
            "cursor" => "pointer"
                )
        );


        $email_menu_title = new MySpan();

        $email_menu_title->setContent("Email");

//        $email_menu_title->actionHandler()
//                ->click()
//                ->dialogBox(array("message" => "Using Email"))
//                ->style();

        $email_menu_title->setColor("#e5e5e5");

        $email_menu->setList_style_type("none");
        $email_menu->getInitiateList(0)
                ->setContent("Compose");
        $email_menu->getInitiateList(0)
                ->setFaIcons()
                ->getPencilSquareO();
        $email_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $email_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setTop(10);
        $email_menu->getInitiateList(0)
                ->setColor("#e5e5e5");
        $email_menu->getInitiateList(2)
                ->setColor("#e5e5e5");
        $email_menu->getInitiateList(2)
                ->setContent("Sent");
        $email_menu->getInitiateList(2)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $email_menu->getInitiateList(2)
                ->setFaIcons()
                ->getReply();
        $email_menu->getInitiateList(1)
                ->setColor("#e5e5e5");
        $email_menu->getInitiateList(1)
                ->setContent("Inbound");
        $email_menu->getInitiateList(1)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $email_menu->getInitiateList(1)
                ->setFaIcons()
                ->getSignIn();


        $stacke_holder_menu = new MyUL();

        $stacke_holder_menu->createNumberOfLiTag(3, array(
            "padding_object" => array(
                "bottom" => 20
            ),
            "margin_object" => array(
                "left" => "-20"
            ),
            "cursor" => "pointer"
                )
        );


        $stacke_holder_menu_title = new MySpan();

        $stacke_holder_menu_title->setContent("Stacke Holder");

        $stacke_holder_menu_title
                ->getText()
                ->setAlign_last("center");

        $stacke_holder_menu_title->setColor("#e5e5e5");

        $stacke_holder_menu->setList_style_type("none");

        $stacke_holder_menu->getInitiateList(0)
                ->setContent("System Analyst");

        $stacke_holder_menu->getInitiateList(0)
                ->setColor("#e5e5e5");

        $stacke_holder_menu->getInitiateList(0)
                ->actionHandler()
                ->click()
                ->dialogBox(array(
                    "message" => $this->getPrincipal()->getUsername(),
                    "style" => "jquery",
                    "title" => "System Analyst"
                ))
                ->display();

        $stacke_holder_menu->getInitiateList(0)
                ->actionHandler()
                ->hover(array("color" => "white"));

        $stacke_holder_menu->getInitiateList(0)
                ->setFaIcons()
                ->getUser();

        $stacke_holder_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);

        $stacke_holder_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setTop(10);

        $stacke_holder_menu->getInitiateList(0)
                ->setFaIcons()
                ->setColor("#07bd49");

        $stacke_holder_menu->getInitiateList(0)
                ->getText()
                ->setAlign_last("center");

        $stacke_holder_menu->getInitiateList(2)
                ->setColor("#e5e5e5");

        $stacke_holder_menu->getInitiateList(2)
                ->setContent("Developer");

//        $stacke_holder_menu->getInitiateList(2)
//                ->actionHandler()
//                ->click()
//                ->submit("/TheManager/receiver/", array("name" => "Evarist", "age" => "32", "location" => "Sai Kung"))
//                ->redirectSubmit();
//
//        $stacke_holder_menu->getInitiateList(2)
//                ->actionHandler()
//                ->click()
//                ->submit("/TheManager/receiver/", array("style" => "jquery"))
//                ->returnDialog()
//                ->returnValue(
//                        array(
//                    "name" => "Evarist",
//                    "age" => "32",
//                    "location" => "Sai Kung"
//                        ), array("success" => "User data saved",
//                    "error" => "There is an error saving data",
//                    "display_message" => true,
//                    "message_var" => "error_desc"
//                        )
//        );


        $stacke_holder_menu->getInitiateList(2)
                ->actionHandler()
                ->click()
                ->submit("/pjchoo/receiver/", array("style" => "jquery"))
                ->returnDialog()
                ->returnValue(
                        array(
                    "name" => "Evarist",
                    "age" => "32",
                    "location" => "Sai Kung"
                        ), array("success" => "User data saved",
                    "error" => "There is an error saving data"
                        )
        );


        $stacke_holder_menu->getInitiateList(2)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);

        $stacke_holder_menu->getInitiateList(2)
                ->setFaIcons()
                ->setColor("#abef40");

        $stacke_holder_menu->getInitiateList(2)
                ->setFaIcons()
                ->getUser();

        $stacke_holder_menu->getInitiateList(1)
                ->setColor("#e5e5e5");

        $stacke_holder_menu->getInitiateList(1)
                ->setContent("Customer");

        $stacke_holder_menu->getInitiateList(1)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);

        $stacke_holder_menu->getInitiateList(1)
                ->setFaIcons()
                ->setColor("#6229b9");

        $stacke_holder_menu->getInitiateList(1)
                ->setFaIcons()
                ->getUser();




        $report_menu = new MyUL();

        $report_menu->createNumberOfLiTag(3, array(
            "padding_object" => array(
                "bottom" => 20
            ),
            "margin_object" => array(
                "left" => "-20"
            ),
            "cursor" => "pointer"
                )
        );


        $report_menu_title = new MySpan();

        $report_menu_title->setContent("Reports");
        $report_menu_title
                ->getText()
                ->setAlign_last("center");

        $report_menu_title->setColor("#e5e5e5");

        $report_menu->setList_style_type("none");
        $report_menu->getInitiateList(0)
                ->setContent("Download");
        $report_menu->getInitiateList(0)
                ->setFaIcons()
                ->getDownload();
        $report_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $report_menu->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setTop(10);
        $report_menu->getInitiateList(0)
                ->setColor("#e5e5e5");
        $report_menu->getInitiateList(0)
                ->setFaIcons()
                ->setColor("#f3d01d");
        $report_menu->getInitiateList(2)
                ->setColor("#e5e5e5");
        $report_menu->getInitiateList(2)
                ->setContent("Chart");
        $report_menu->getInitiateList(2)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $report_menu->getInitiateList(2)
                ->setFaIcons()
                ->setColor("#abef40");
        $report_menu->getInitiateList(2)
                ->setFaIcons()
                ->getBarChart();
        $report_menu->getInitiateList(1)
                ->setColor("#e5e5e5");
        $report_menu->getInitiateList(1)
                ->setContent("Progress");
        $report_menu->getInitiateList(1)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $report_menu->getInitiateList(1)
                ->setFaIcons()
                ->setColor("#e92668");
        $report_menu->getInitiateList(1)
                ->setFaIcons()
                ->getLineChart();




        $main_ul_list->getInitiateList(0)
                ->getField()
                ->add($project_menu_title);
        $main_ul_list->getInitiateList(0)
                ->getField()
                ->add($project_menu);
        $main_ul_list->getInitiateList(0)
                ->setFaIcons()
                ->getTasks();
        $main_ul_list->getInitiateList(0)
                ->setCursor("pointer");
        $main_ul_list->getInitiateList(0)
                ->setFaIcons()
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(0)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);

        $main_ul_list->getInitiateList(1)
                ->getField()
                ->add($email_menu_title);
        $main_ul_list->getInitiateList(1)
                ->setFaIcons()
                ->getEnvelope();
        $main_ul_list->getInitiateList(1)
                ->getField()
                ->add($email_menu);
        $main_ul_list->getInitiateList(1)
                ->setFaIcons()
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(1)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);


        $main_ul_list->getInitiateList(2)
                ->getField()
                ->add($stacke_holder_menu_title);
        $main_ul_list->getInitiateList(2)
                ->setFaIcons()
                ->getUsers();
        $main_ul_list->getInitiateList(2)
                ->getField()
                ->add($stacke_holder_menu);
        $main_ul_list->getInitiateList(2)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);


        $main_ul_list->getInitiateList(3)
                ->setFaIcons()
                ->getCommentsO();
        $main_ul_list->getInitiateList(3)
                ->setFaIcons()
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(3)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $main_ul_list->getInitiateList(3)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);

        $main_ul_list->getInitiateList(4)
                ->getField()
                ->add($report_menu_title);
        $main_ul_list->getInitiateList(4)
                ->getField()
                ->add($report_menu);
        $main_ul_list->getInitiateList(4)
                ->setFaIcons()
                ->getLineChart();
        $main_ul_list->getInitiateList(4)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $main_ul_list->getInitiateList(5)
                ->setFaIcons()
                ->getCalendarCheckO();
        $main_ul_list->getInitiateList(5)
                ->setFaIcons()
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(5)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $main_ul_list->getInitiateList(6)
                ->setFaIcons()
                ->getTable();
        $main_ul_list->getInitiateList(6)
                ->setFaIcons()
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(6)
                ->setFaIcons()
                ->Padding()
                ->setRigth(10);
        $main_ul_list->getInitiateList(1)
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(2)
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(3)
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(3)
                ->setContent("IM");
        $main_ul_list->getInitiateList(4)
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(5)
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(5)
                ->setContent("Meeting");
        $main_ul_list->getInitiateList(6)
                ->setColor("#e5e5e5");
        $main_ul_list->getInitiateList(6)
                ->setContent("Scheldule");

        $navigation_menu = new MyUL();

        $navigation_menu->setList_style_type("none");

        //$navigation_menu->createNumberOfLiTag(3);
        //$main_ul_list->changeFieldSetting(7)->getField()->add($navigation_menu);


        $main_menu->Aside()
                ->getField()
                ->add($main_ul_list);
        $main_menu->right();
        $main_menu->Aside()->setBackgroundColor("gray");

        /**
         * Start creating the left menu group
         * to hold all the menu objects
         */
        $menu_division_left = new MyGroup();
        $menu_division_left->setBackgroundColor("gray");
        $menu_division_left
                ->getField()
                ->add($main_ul_list);
        $menu_division_left->left();
        $menu_division_left->setWidth("12%");

        /**
         * end menu division left
         */
        /**
         * Start creating the menu division 
         * object to all the left menu items
         */
        $menu_division_top = new MyGroup();
        $menu_division_top->setBackgroundColor("#15458a");
        $menu_division_top
                ->getField()
                ->add($navigation_menu);
        $menu_division_top->setHeight("7%");
        $menu_division_top->top();

        /**
         * end of creating menu division
         * object
         */
        /**
         * Start creating menu image of the 
         * top menu
         */
        $menu_image = new MySpan();
        $menu_image
                ->setFaIcons()
                ->getAlignJustify();
        $menu_image
                ->setFaIcons()
                ->setColor("white");
        $menu_image
                ->Font()
                ->setSize(25);
        $menu_image->Margin()
                ->setTop("-5");
        $menu_image->setPosition("absolute");
        $menu_image->setCursor("pointer");
        $menu_image
                ->Margin()
                ->setLeft("121");
        /**
         * end of creating image object of the top menu
         */
        $menu_division_top
                ->getField()
                ->add($menu_image); //add this menu image to the top menu division

        $menu_image->actionHandler()
                ->click()
                ->fadeInOut(array("time_in_sec" => 3000, "widget" => $menu_division_left->getWidget_field_index(), "fade_location" => 0));

        $menu_division_left->setHeight("100%");

        $menu_division_left->setOverflow("scroll", "y");
        /**
         * Start adding all the menu to the web page
         * interface
         */
        $page->webPage()->add($menu_division_left);
        $page->webPage()->add($menu_division_top);
    }

}
