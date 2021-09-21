<?php
include "../include/inbound.php";
$inbound =new inbound();

$sql= "SELECT* group_name FROM vicidial_inbound_dids";
$result =mysqli_query($conn,$sql);
 
 
 
 ?> 

<!-- =========Show User Groups Start -->
<div>
    <div class="show-users-group">

        <!-- this is the top navbar that containes add user, copy user, time sheet and search option -->
        <div class="my-nav">
            <ul>
                <li>
                    <a class="nav-active" href="#add-user-group" data-toggle="modal" data-target="#add-user-group"><i
                            class="fa fa-plus-circle" aria-hidden="true"></i>
                        Add New DIDs</a>
                </li>
                <li>
                    <a href="#copy-user" data-toggle="modal" data-target="#copy-user"><i class="fa fa-clone"
                            aria-hidden="true"></i> Copy DID</a>
                </li>
                <li>
                    <input type="search" placeholder="Search User Group" name="search" id="search-user">
                </li>
            </ul>
        </div>
        <!-- this is where top navbar ends -->

        <!-- user list table start -->
        <div class="table-responsive my-table">
            <div class="table-top">
                <h4>INBOUND GROUP LISTINGS</h4>
                <div class="my-filter-dropdown">
                    <div class="dropdown">
                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/images/common-icons/filter_list.png" alt="">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.5 15.5C18.22 15.5 20.25 16.3 20.5 16.78V17.5H12.5V16.78C12.75 16.3 14.78 15.5 16.5 15.5M16.5 14C14.67 14 11 14.92 11 16.75V19H22V16.75C22 14.92 18.33 14 16.5 14M9 13C6.67 13 2 14.17 2 16.5V19H9V17.5H3.5V16.5C3.5 15.87 6.29 14.34 9.82 14.5A5.12 5.12 0 0 1 11.37 13.25A12.28 12.28 0 0 0 9 13M9 6.5A1.5 1.5 0 1 1 7.5 8A1.5 1.5 0 0 1 9 6.5M9 5A3 3 0 1 0 12 8A3 3 0 0 0 9 5M16.5 8.5A1 1 0 1 1 15.5 9.5A1 1 0 0 1 16.5 8.5M16.5 7A2.5 2.5 0 1 0 19 9.5A2.5 2.5 0 0 0 16.5 7Z" />
                                </svg></i> All</a>
                            <a class="dropdown-item" href="#">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M21.1,12.5L22.5,13.91L15.97,20.5L12.5,17L13.9,15.59L15.97,17.67L21.1,12.5M11,4A4,4 0 0,1 15,8A4,4 0 0,1 11,12A4,4 0 0,1 7,8A4,4 0 0,1 11,4M11,6A2,2 0 0,0 9,8A2,2 0 0,0 11,10A2,2 0 0,0 13,8A2,2 0 0,0 11,6M11,13C11.68,13 12.5,13.09 13.41,13.26L11.74,14.93L11,14.9C8.03,14.9 4.9,16.36 4.9,17V18.1H11.1L13,20H3V17C3,14.34 8.33,13 11,13Z" />
                                </svg> Active</a>
                        </div>
                    </div>
                </div>
            </div>
            <table class="all-user-table table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><a href="#">SL</a></th>
                        <th scope="col"><a href="#">DID</a></th>
                        <th scope="col"><a href="#">DESCRIPTION</a></th>
                        <th scope="col"><a href="#">CARRIER</a></th>
                        <th scope="col"><a href="#">ACTIVE</a></th>
                        <th scope="col"><a href="#">ADMIN GROUP</a></th>
                        <th scope="col"><a href="#">ROUTE</a></th>
                        <th scope="col"><a href="#">REC</a></th>
                        <th scope="col"><a href="#">MODIFY</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1</td>
                        <td><a href="#">DEFAULT</a></td>
                        <td> DEFAULT DID</td>
                        <td> DEFAULT DID</td>
                        <td> <span class="active-yes">Y</span> </td>
                        <td> All</td>
                        <td> Exten</td>
                        <td> <span class="active-no">N</span> </td>
                        <td> <a href=""> Modify</a> </td>



                    </tr>

                </tbody>
            </table>
        </div>
        <!-- user list table ends -->

    </div>
</div>
<!-- =========Show User Groups End -->

















<!-- Copy user modal starts here -->
<div class="modal fade" id="copy-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Copy User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">

                    <div class="row">
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">
                                <input type="text" class="form-control" id="did_pattern" name="did_pattern"
                                    aria-describedby="did_pattern">
                                <label for="did_pattern">DID Extension</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="did_description" name="did_description"
                                    aria-describedby="did_description">
                                <label for="did_description">DID Description</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                        <div class="my-dropdown-with-help col-12 col-md-6 ">
                            <div class="my-dropdown">
                                <select name="source_did" id="source_did">
                                    <option value="1">default - Default DID</option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="source_did">Source Group ID</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>



                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary my-btn-secondary"
                        data-dismiss="modal">Cancel</button>
                    <input class="my-btn-primary" type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Copy user modal ends here -->

<!-- Add user-group modal starts here -->
<div class="modal fade" id="add-user-group" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New In-Group</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="">
                <div class="modal-body">

                    <div class="row">
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">
                                <input type="text" class="form-control" id="did_pattern" name="did_pattern"
                                    aria-describedby="did_pattern">
                                <label for="did_pattern">DID Extension</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                        <div class="my-input-with-help col-6">
                            <div class="form-group my-input">

                                <input type="text" class="form-control" id="did_description" name="did_description"
                                    aria-describedby="did_description">
                                <label for="did_description">DID Description</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>
                        <div class="my-dropdown-with-help col-12 col-md-6 ">
                            <div class="my-dropdown">
                                <select name="user_group" id="user_group">
                                    <option value="---ALL---">All Admin User Groups</option>
                                    <option value="ADMIN">ADMIN - VICIDIAL ADMINISTRATORS</option>
                                    <option value="AGENTS">AGENTS - VICIDIAL AGENTS</option>
                                    <option value="CUSTOM-ADMIN">CUSTOM-ADMIN - CUSTOM-ADMIN</option>
                                    <option value="Tazbin">Tazbin - QTest </option>
                                    <option selected="" value="---ALL---">All Admin User Groups</option>
                                </select>
                                <i class="fa fa-caret-down my-dropdown-arrow" aria-hidden="true"></i>
                                <label for="user_group">Admin User Group</label>
                            </div>
                            <span class="error-msg">Error Msg</span>
                        </div>




                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary my-btn-secondary"
                        data-dismiss="modal">Cancel</button>
                    <input class="my-btn-primary" type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add user-group modal End here -->