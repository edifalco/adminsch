@extends('layouts.front')

@section('content')

<main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section-shaped my-0">
        <div class="shape shape-style-1 shape-default shape-skew">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container shape-container d-flex">
          <div class="col px-0">
            <div class="row justify-content-center">
              <div class="col-lg-9 text-center">
                <h1 class="display-3 text-white">Full Feature List</h1>
                <p class="lead text-white">NiftySchool is built for small to medium sized language schools. Every feature is focused on one thing: helping you manage and grow your business.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 pb-0 mt--200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-md-12">
                <div class="card shadow border-0">
                  <div class="card-body py-5">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                        
                          <div class="card mb-4">
                            <div class="card-body">
                              <h4 class="card-title"><a href="{{ route('home.feature', 'student-management') }}">Student Management</a></h4>
                              <p class="card-text">Clear overview screen.<br>
                                Full student details.<br>
                                Track student status (trial, active, etc).<br>
                                Keep history of enrollments.<br>
                                Automatically check attendance.<br>
                                Take picture with webcam or upload.<br>
                                Track assesment tests and exams.<br>
                                How they heard about the school.<br>
                                Link to agencies.<br>
                                Duplicate entry checker.<br>
                                Send email &amp; SMSes.</p>
                            </div>
                          </div>
                          
                          <div class="card mb-4">
                            <div class="card-body">
                              <h4 class="card-title"><a href="{{ route('home.feature', 'attendance-tracking') }}">Attendance</a></h4>
                              <ul class="card-text">
                                <li>Track presence, absence, lateness</li>
                                <li>Entry/exit times for laboratories</li>
                                <li>Attendance rate calculation</li>
                                <li>Attendance calendar per student</li>
                                <li>Support for holidays</li>
                                <li>Support for authorized absences</li>
                                <li>Daily/weekly class attendance</li>
                                <li>Print attendance report</li>
                                <li>Auto-mark as present</li>
                                <li>1st/2nd hour for Callan method</li>
                              </ul>
                            </div>
                          </div>
                          
                          <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'teachers-timetable') }}">Teacher Schedules</a></h4>
                            <ul class="feature_list">
                              <li>Manage teachers' details</li>
                              <li>Teachers can access the system</li>
                              <li>See timetable &amp; track attendance</li>
                              <li>Print teacher's timetable in Excel</li>
                              <li>Print monthly list of lessons</li>
                              <li>Monthly summary with hours taught</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'teachers-timetable') }}">Timetable</a></h4>
                            <ul class="feature_list">
                              <li>Interactive weekly timetable</li>
                              <li>Reschedule, cancel, amend lessons</li>
                              <li>Filter by teacher</li>
                              <li>Check unassigned lessons</li>
                              <li>Copy complex schedules from past weeks</li>
                              <li>Print &amp; hang to message board</li>
                              <li>Print monthly list of lessons</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'documents') }}">Documents</a></h4>
                            <ul class="feature_list">
                              <li>Track issued documents</li>
                              <li>Upload documents online</li>
                              <li>Automatic encryption and backup</li>
                              <li>Unlimited storage space</li>
                              <li>Managers can clear documents</li>
                              <li>Generate documents from Word templates</li>
                              <li>Generate student reports</li>
                              <li>Letters &amp; enrollment agreements</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'accommodation') }}">Accommodation Handling</a></h4>
                            <ul class="feature_list">
                              <li>Store family details</li>
                              <li>Store beds/rooms info</li>
                              <li>Pets, smokers, internet etc.</li>
                              <li>Assign students to families</li>
                              <li>Full accommodation history</li>
                              <li>Accommodation matching</li>
                              <li>Advanced search</li>
                              <li>Accomodation calendar &amp; availability</li>
                              <li>Email communication &amp; SMSes</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'student-management') }}">Contact/Prospects</a></h4>
                            <ul class="feature_list"><li>Track new contacts</li>
                              <li>Store interests</li>
                              <li>Assign follow-up actions</li>
                              <li>Filter and send promotional emails</li>
                              <li>Convert to active once enrolled </li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'planning-tools') }}">Planning Tools</a></h4>
                            <ul class="feature_list">
                              <li>Organize room usage</li>
                              <li>Print room usage in PDF</li>
                              <li>Enrolment forecasts per class</li>
                              <li>Number of 'seats' over time</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4>Assessment Tests & Exams</h4>
                            <ul class="feature_list">
                              <li>Book assessment tests &amp; track results</li>
                              <li>Create exam sheets (TOEFL/TESOL/IELST etc..)</li>
                              <li>Print exam sheets in Excel format</li>
                              <li>Save exam results &amp; certificates</li>
                              <li>Include results in progress reports</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4>Multiple Branches</h4>
                            <ul class="feature_list">
                              <li>Ability to add extra branches</li>
                              <li>Assign existing users to branch</li>
                              <li>Quick switcher / single sign on</li>
                              <li>Branches are indipendently customisable</li>
                            </ul>
                          </div>
                        </div>
                        
                      </div>
                      <div class="col-lg-6">
                        
                        <div class="card mb-4">
                          <div class="card-body">
                            <h4><a href="{{ route('home.feature', 'classes-registers') }}">Group Classes</a></h4>
                            <ul class="feature_list">
                              <li>Easy scheduling</li>
                              <li>Support rolling classes</li>
                              <li>Track room and teachers</li>
                              <li>Print daily/weekly register </li>
                              <li>Extended registers with signatures</li>
                              <li>Track class level/notes</li>
                              <li>Live search </li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body">  
                            <h4><a href="{{ route('home.feature', 'classes-registers') }}">Private Classes</a></h4>
                            <ul class="feature_list">
                              <li>Quickly add series of lessons</li>
                              <li>Track attendance &amp; topic</li>
                              <li>Reschedule,cancel, amend lessons</li>
                              <li>Print list of lessons</li>
                              <li>Handle substitutions</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'classes-registers') }}">Laboratories/Self-study</a></h4>
                            <ul class="feature_list">
                              <li>Track entry/exit times</li>
                              <li>Assign weekly attendance goals</li>
                              <li>Attendance up to the minute</li>
                              <li>Print registers with signatures</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'payments-receipts') }}">Payments</a></h4>
                            <ul class="feature_list">
                              <li>Track payments</li>
                              <li>Multi-item payments</li>
                              <li>Support for multiple payment methods</li>
                              <li>Track who took the payment </li>
                              <li>Refunds, discounts, vouchers</li>
                              <li>Auto VAT/tax calculation</li>
                              <li>Current balance/cash flow</li>
                              <li>Export to Excel for your accountant</li>
                              <li>Managers can clear payments</li>
                              <li>Alerts when a payment is due/overdue</li>
                              <li>Online payments credit card/paypal</li>
                              <li>Send payment request</li>
                              <li>Track inventory (books, CDs etc)</li>
                              <li>Decrease inventory upon payments </li>
                              <li>Print customisable invoices/receipts</li>
                              <li>Print supermarket style receipts</li>
                              <li>Printable daily cashier</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body">  
                            <h4><a href="{{ route('home.feature', 'stats-reports') }}">Reports</a></h4>
                            <ul class="feature_list">
                              <li>Overview and trends</li>
                              <li>Full history of the school</li>
                              <li>Student status report</li>
                              <li>Payments report</li>
                              <li>Contact media report</li>
                              <li>Nationality report</li>
                              <li>Top countries of origin</li>
                              <li>Top payment categories</li>
                              <li>Earnings from Visa students</li>
                              <li>Joiners, leavers, full lists</li>
                              <li>Birthday reports per month</li>
                              <li>SMS report</li>
                              <li>Download in Excel format </li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'staff-management') }}">Staff Access Control</a></h4>
                            <ul class="feature_list">
                              <li>Unlimited users per school</li>
                              <li>Staff address book</li>
                              <li>Live search by name, role, etc</li>
                              <li>Multiple access roles</li>
                              <li>Track who creates/updates students</li>
                              <li>Track who takes payments/documents</li>
                              <li>Check last login time</li>
                              <li>Assign staff to multiple branches</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4><a href="{{ route('home.feature', 'student-management') }}">Visa Students Support</a></h4>
                            <ul class="feature_list">
                              <li>Country specific Visas</li>
                              <li>Visa dates, number, passport etc</li>
                              <li>Alerts on document expiry</li>
                              <li>Alerts on program expiry</li>
                              <li>Alerts on poor attendance</li>
                              <li>Alerts on missing lessons </li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4>Advanced Search</h4>
                            <ul class="feature_list">
                              <li>Quick student finder</li>
                              <li>Search by status</li>
                              <li>Search by Visa type</li>
                              <li>Search by start date</li>
                              <li>Search by interest</li>
                              <li>Search for kids/adults</li>
                              <li>Search private/groups</li>
                              <li>Download in Excel</li>
                              <li>Send bulk emails/SMSes</li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="card mb-4">
                          <div class="card-body"> 
                            <h4>Configuration</h4>
                            <ul class="feature_list">
                              <li>Enable/disable modules</li>
                              <li>Enable weekend classes</li>
                              <li>Class register printing options</li>
                              <li>Choose alerts notifications</li>
                              <li>Setup online payments using PayPal</li>
                              <li>Manage agencies &amp; contact media</li>
                              <li>Payment/Document categories</li>
                              <li>Customise receipt printing</li>
                              <li>Language Levels</li>
                              <li>Holiday calendar</li>
                            </ul>
                          </div>
                        </div>

                        </div>
                      </div>
                    </div>
                  <hr/>
                  <center>Don't find what you're looking for? <a href="/contact"><b>Let us know, we can add it for you!</b></a></center>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

  </main>
  <footer class="footer has-cards">
    <div class="container">
      <div class="row mb-5 pb-5">
        <div class="col-md-6 mb-5 mb-md-0">
          @if(isset($featureprev))
            <div class="card shadow shadow-lg--hover">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-bold-left"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success"></h5>
                    <p></p>
                    <a href="" class="text-success">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          @if(isset($featurenext))
            <div class="card shadow shadow-lg--hover">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div class="pl-4">
                    <h5 class="title text-success"></h5>
                    <p></p>
                    <a href="" class="text-success">Learn more</a>
                  </div>
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-bold-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
    
    <section class="section section-lg pt-5">
      <div class="container">
        <div class="card bg-gradient-warning shadow-lg border-0">
          <div class="p-5">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h3 class="text-white">Create your account now!</h3>
                <p class="lead text-white mt-3">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p>
              </div>
              <div class="col-lg-3 ml-lg-auto">
                <a href="/register" class="btn btn-lg btn-block btn-white">Create account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection