<div class="container">
    <!-- Offcanvas button for search -->
    <button class="btn btn-primary d-sm-none w-100 mb-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasEditsearch" aria-controls="offcanvasEditsearch"><i
            class="bi bi-pencil-square me-2"></i>Edit Search</button>

    <!-- Search with offcanvas START -->
    <div class="offcanvas-sm offcanvas-top" tabindex="-1" id="offcanvasEditsearch"
        aria-labelledby="offcanvasEditsearchLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasEditsearchLabel">Edit search</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasEditsearch"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-2">
            <div class="bg-light p-4 rounded w-100">
                <form class="row g-4">
                    <!-- Location -->
                    <div class="col-md-6 col-lg-4">
                        <div class="form-size-lg form-fs-md">
                            <!-- Select input -->
                            <label class="form-label">Location</label>
                            <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                                aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                                <div class="choices__inner"><select class="form-select js-choice choices__input"
                                        data-search-enabled="true" hidden="" tabindex="-1" data-choice="active">
                                        <option value="San Jacinto, USA" data-custom-properties="[object Object]">San
                                            Jacinto, USA</option>
                                    </select>
                                    <div class="choices__list choices__list--single">
                                        <div class="choices__item choices__item--selectable" data-item="" data-id="1"
                                            data-value="San Jacinto, USA" data-custom-properties="[object Object]"
                                            aria-selected="true">San Jacinto, USA</div>
                                    </div>
                                </div>
                                <div class="choices__list choices__list--dropdown" aria-expanded="false"><input
                                        type="search" name="search_terms" class="choices__input choices__input--cloned"
                                        autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                                        aria-autocomplete="list" aria-label="Select location" placeholder="">
                                    <div class="choices__list" role="listbox">
                                        <div id="choices--q342-item-choice-1"
                                            class="choices__item choices__item--choice choices__placeholder choices__item--selectable is-highlighted"
                                            role="option" data-choice="" data-id="1" data-value=""
                                            data-select-text="Press to select" data-choice-selectable=""
                                            aria-selected="true">Select location</div>
                                        <div id="choices--q342-item-choice-2"
                                            class="choices__item choices__item--choice is-selected choices__item--selectable"
                                            role="option" data-choice="" data-id="2" data-value="San Jacinto, USA"
                                            data-select-text="Press to select" data-choice-selectable="">San Jacinto,
                                            USA</div>
                                        <div id="choices--q342-item-choice-3"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="3" data-value="North Dakota, Canada"
                                            data-select-text="Press to select" data-choice-selectable="">North Dakota,
                                            Canada</div>
                                        <div id="choices--q342-item-choice-4"
                                            class="choices__item choices__item--choice choices__item--selectable"
                                            role="option" data-choice="" data-id="4" data-value="West Virginia, Paris"
                                            data-select-text="Press to select" data-choice-selectable="">West Virginia,
                                            Paris</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Check in -->
                    <div class="col-md-6 col-lg-3">
                        <!-- Date input -->
                        <div class="form-fs-md">
                            <label class="form-label">Check in - out</label>
                            <input type="text" class="form-control form-control-lg flatpickr flatpickr-input"
                                data-mode="range" placeholder="Select date" value="19 Sep to 28 Sep"
                                readonly="readonly">
                        </div>
                    </div>

                    <!-- Guest -->
                    <div class="col-md-6 col-lg-3">
                        <div class="form-fs-md">
                            <!-- Dropdown input -->
                            <div class="w-100">
                                <label class="form-label">Guests &amp; rooms</label>
                                <div class="dropdown guest-selector me-2">
                                    <input type="text"
                                        class="form-guest-selector form-control form-control-lg selection-result"
                                        value="2 Guests 1 Room" id="dropdownguest" data-bs-auto-close="outside"
                                        data-bs-toggle="dropdown">

                                    <!-- dropdown items -->
                                    <ul class="dropdown-menu guest-selector-dropdown" aria-labelledby="dropdownguest">
                                        <!-- Adult -->
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0">Adults</h6>
                                                <small>Ages 13 or above</small>
                                            </div>

                                            <div class="hstack gap-1 align-items-center">
                                                <button type="button" class="btn btn-link adult-remove p-0 mb-0"><i
                                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                <h6 class="guest-selector-count mb-0 adults">2</h6>
                                                <button type="button" class="btn btn-link adult-add p-0 mb-0"><i
                                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                            </div>
                                        </li>

                                        <!-- Divider -->
                                        <li class="dropdown-divider"></li>

                                        <!-- Child -->
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0">Child</h6>
                                                <small>Ages 13 below</small>
                                            </div>

                                            <div class="hstack gap-1 align-items-center">
                                                <button type="button" class="btn btn-link child-remove p-0 mb-0"><i
                                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                <h6 class="guest-selector-count mb-0 child">0</h6>
                                                <button type="button" class="btn btn-link child-add p-0 mb-0"><i
                                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                            </div>
                                        </li>

                                        <!-- Divider -->
                                        <li class="dropdown-divider"></li>

                                        <!-- Rooms -->
                                        <li class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-0">Rooms</h6>
                                                <small>Max room 8</small>
                                            </div>

                                            <div class="hstack gap-1 align-items-center">
                                                <button type="button" class="btn btn-link room-remove p-0 mb-0"><i
                                                        class="bi bi-dash-circle fs-5 fa-fw"></i></button>
                                                <h6 class="guest-selector-count mb-0 rooms">1</h6>
                                                <button type="button" class="btn btn-link room-add p-0 mb-0"><i
                                                        class="bi bi-plus-circle fs-5 fa-fw"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="col-md-6 col-lg-2 mt-md-auto">
                        <a class="btn btn-lg btn-primary w-100 mb-0" href="#"><i
                                class="bi bi-search fa-fw"></i>Search</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Search with offcanvas END -->
</div>