<link rel="stylesheet" href="css/styles.css">
<div class="col-12 col-sm-4 col-xl-3 px-sm-2 px-0 bg-light d-flex sticky-top bigbox">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-dark" style="background-color: white;">
                <!--<a href="index.php" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-dark pt-sm-0 pt-md-3 text-decoration-none" >
                <img src="images/" width="30" height="30" class="d-inline-block align-top me-3" alt="">
                    COLLECTR.
                </a>-->
                <a href="index.php"><img src="images/logoText.png" class="logo" alt="logo"></a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 mt-0 mt-md-3 justify-content-center align-items-center align-items-sm-start" id="menu">
                    
                       <!-- <li class="nav-item py-2">
                        <a href="ngo_viewitem.php" class="nav-link px-sm-0 px-2">
                            <img src="images/check2-circle.svg" width="20" height="20"><span class="ms-3 d-none d-sm-inline">View/Select Item</span>
                        </a>
                    </li>
                    <li class="nav-item py-2">
                        <a href="ngo_viewhist.php" class="nav-link px-sm-0 px-2">
                            <img src="images/clock-history.svg" width="20" height="20"><span class="ms-3 d-none d-sm-inline">View History</span> </a>
                    </li>
                    <li class="nav-item py-2">
                        <a href="ngo_modifydetails.php" class="nav-link px-sm-0 px-2">
                            <img src="images/pencil-square.svg" width="20" height="20"><span class="ms-3 d-none d-sm-inline">Modify Details</span></a>
                    </li>-->
                    
                    <li class="nav-item py-2 ">
                    <button class="btn btn-hero bigbox" id="btn" onclick="window.location.href = 'ngo_viewitem.php';">
                    VIEW/SELECT ITEM</button>
                    </li>
                    <li><br></li>
                    <li class="nav-item py-2 ">
                    <button class="btn btn-hero bigbox" id="btn" onclick="window.location.href = 'ngo_viewhist.php';">
                   View history</button>
                    </li>
                    <li><br></li>
                    <li class="nav-item py-2 ">
                    <button class="btn btn-hero bigbox" id="btn" onclick="window.location.href = 'ngo_request.php';">
                   Organize & Collaborate</button>
                    </li>
                    <li><br></li>
                    <li class="nav-item py-2 ">
                    <button class="btn btn-hero bigbox" id="btn" onclick="window.location.href = 'ngo_viewmsg.php';">
                   View Messages</button>
                    </li>
                    <li><br></li>
                    <li class="nav-item py-2 ">
                    <button class="btn btn-hero bigbox" id="btn" onclick="window.location.href = 'ngo_modifydetails.php';">
                   Modify Details</button>
                    </li>                

                </ul>
                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/person-circle.svg" alt="hugenerd" width="28" height="28" class="rounded-circle me-2">
                        <span class="d-none d-sm-inline mx-1">User (NGO)</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <!--<li><a class="dropdown-item" href="#">View Profile</a></li>-->
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>