<?php

/* @var $this yii\web\View */

$this->title = 'Страница редактирования';
?>

<div class="flex@md">
        <aside class="sidebar sidebar--static@md js-sidebar" id="sidebar" aria-labelledby="sidebarTitle">
            <div class="sidebar__panel">
                <header class="sidebar__header">
                    <div class="Brand">Color Project</div>
                    <button class="reset sidebar__close-btn js-sidebar__close-btn js-tab-focus">
                        <svg class="icon" viewBox="0 0 16 16">
                            <title>Close panel</title>
                            <g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line>
                                <line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line>
                            </g>
                        </svg>
                    </button>
                </header>

                <div class="sidebar__content">
                    <!-- start sidebar content -->
                    <div class="text-component padding-md">
                        <!--         <form class="form-inline md-form mb-0 w-100 form-sm mt-0">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search"> 
</form> -->


                        <div class="search-input search-input--icon-right">
                            <input class="form-control width-100%" type="search" name="searchInputX" id="searchInputX" placeholder="Search...">
                            <button class="search-input__btn">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <title>Search</title>
                                    <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none" stroke-miterlimit="10">
                                        <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                                        <circle cx="10" cy="10" r="8"></circle>
                                    </g>
                                </svg>
                            </button>
                        </div>




                        <section>
                            <div class="container m-0 p-0 max-width-sm">

                                <ul class="accordion  js-accordion category-container" data-animation="on" data-multi-items="off">
                                    
                                </ul>
                                
                            </div>
                        </section>




                    </div>
                    <!-- end sidebar content -->









                </div>
            </div>
        </aside>

        <main class="w-100 position-relative">
            <!-- start main content -->
            <div class="position-absolute fixed-top">

                <div class="card w-100">
                    <div class="d-flex card-body justify-content-between ">

                        <div class="text-center flex-column">

                            <button class="btn btn--primary button-studio" aria-controls="sidebar"><img src="img/ListButton.svg"></button>
                            <button class="btn btn--primary button-studio"><img src="img/11.svg"></button>

                        </div>

                        <div class="text-center flex-column">

                            <button class="btn btn--primary button-studio"><img src="img/12.svg"></button>
                            <button class="btn btn--primary button-studio"><img src="img/13.svg"></button>
                            <input class="scale" type="text" placeholder="Scale" value="100">
                        </div>

                        <div class="text-center flex-column">

                            <button class="btn btn--primary button-studio"><img src="img/14.svg"></button>
                            <button class="save btn btn--primary button-studio save-button"><img src="img/15.svg"></button>
                        </div>


                    </div>
                </div>

            </div>

            <div class="container h-100">
                <!-- FIXED START -->
                <div class="row h-100">
                    <div class="align-self-center main-svg">

                    </div>
                    <!-- FIXED END -->
                </div>
            </div>
            <div class="position-absolute fixed-bottom">

                <div class="card w-100 a border-0 b">



                    <div class="d-flex card-body index justify-content-around c">

                        <div class="flex flex-column items-start ">
                            <label class="form-label margin-bottom-xxxs m-auto" for="selectThis">Шрифт:</label>

                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Шрифт
  </button>
                        </div>

                        <div class="text-center flex-column">
                            <p class="m-0">A</p>


                            <button class=" btn color-picker button-studio btn--primary m"></button>


                        </div>


                        <div class="text-center flex-column">
                            <p class="m-0">Размер</p>
                            <div class="def-number-input number-input safari_only">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus size-tool"></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus size-tool"></button>
                            </div>

                        </div>



                        <div class="text-center flex-column">
                            <p class="m-0">Стиль</p>
                            <button id="underline" class="btn  btn--primary button-studio"><img src="img/16.svg"></button>
                            <button id="weight" class="btn btn--primary button-studio text-style"><img src="img/17.svg"></button>
                            <button id="style" class="btn btn--primary button-studio text-style"><img src="img/18.svg"></button>

                        </div>

                        <!--       <div class="flex flex-column items-start ">
  <label class="form-label margin-bottom-xxxs  ml-auto mr-auto mb-0" for="selectThis">Логотип:</label>
  
<button class="btn btn--primary safe button-studio">Выбрать логотип</button>
</div>-->
                        <div class="text-center flex-column">
                            <p class="m-0">Логотип</p>

                            <input type="file" class="btn  btn--primary button-studio"><img src="img/16.svg"></input>



                        </div>


                        <div class="flex flex-column items-start ">
                            <label class="form-label margin-bottom-xxxs m-auto" for="selectThis">Скачать:</label>


                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
   Формат
  </button>

                            <!--       <div class="select inline-block js-select m-0" data-trigger-class="btn btn--subtle justify-between">
                                <select name="selectThis" id="selectThis" class="save">
                                    <optgroup label="Выбрать формат">
                                        <option value="0">Первый формат</option>
                                        <option value="1">Третий формат</option>
                                        <option value="png">PNG</option>
                                    </optgroup>
                                </select>

                                <svg class="icon icon--xs margin-left-xxxs" aria-hidden="true" viewBox="0 0 16 16">
                                    <polygon points="3,5 8,11 13,5 "></polygon>
                                </svg>
                            </div> -->


                        </div>

                    </div>






                </div>

                <div class="collapse" id="collapseExample">

                    <form>
                        <div class=" p-4 card">
                            <fieldset>
                                <legend class="form-legend">Выберете шрифт</legend>

                                <ul class="radio-list flex flex-column flex-gap-xxxs">
                                    <li>
                                        <input class="radio" type="radio" name="radioButton" id="radio1" checked>
                                        <label for="radio1">Шрифт 1</label>
                                    </li>

                                    <li>
                                        <input class="radio" type="radio" name="radioButton" id="radio2">
                                        <label for="radio2">Шрифт 2</label>
                                    </li>

                                    <li>
                                        <input class="radio" type="radio" name="radioButton" id="radio3">
                                        <label for="radio3">Шрифт 3</label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                    </form>

                </div>




                <div class="collapse" id="collapseExample1">

                    <form>
                        <div class=" p-4 card">
                            <fieldset>
                                <legend class="form-legend">Выберете формат</legend>

                                <ul class="radio-list flex flex-column flex-gap-xxxs format-save">
                                    <li>
                                        <input class="format-save-item radio" type="radio" name="radioButton" id="radio12" value="png" checked>
                                        <label for="radio12">PNG</label>
                                    </li>

                                    <li>
                                        <input class="format-save-item radio" type="radio" name="radioButton" id="radio13" value="jpeg">
                                        <label for="radio13">JPEG</label>
                                    </li>

                                    <li>
                                        <input class="format-save-item radio" type="radio" name="radioButton" id="radio14" value="pdf">
                                        <label for="radio14">PDF</label>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                    </form>

                </div>
            </div>

            <!-- end main content -->
        </main>
    </div>