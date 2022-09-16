<x-guest-layout>
     <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
          <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
            <div class="rounded-t bg-white mb-0 px-6 py-6">
              <div class="text-center">
                <h6 class="text-blueGray-700 text-xl font-bold text-center">
                  Profile completion page - individual
                </h6>

                @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">
                           <span>Opps something went wrong</span>
                        </div>

                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                                
              </div>
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
     
              <form method="POST" action="{{route('profilecomplete')}}" enctype="multipart/form-data">
                @csrf
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                  User Information
                </h6>

                <div class="flex flex-wrap mb-16">
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Date of birth
                      </label>
                      <input 
                        required
                        name="dateofbirth"
                        type="date" 
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
     
                  <div class="w-full lg:w-6/12 px-4">
                    @php
                        $firstAndLastName = explode(" ",Auth::user()->name);
                    @endphp
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Email address
                      </label>
                      <input 
                        required
                        name="email"
                        type="email" 
                        value="{{Auth::user()->email}}"
                        class="border-0 px-3- py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
     
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        First Name
                      </label>
                      <input 
                        name="firstname"
                        value="{{$firstAndLastName[0]}}"
                        required
                        type="text" 
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
     
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Last Name
                      </label>
                      <input 
                        type="text" 
                        name="lastname"
                        value="{{$firstAndLastName[1]}}"
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>

                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Mobile number
                      </label>
                      <input 
                        type="text" 
                        name="mobile_number"
                        value=""
                        placeholder="+233-054-218-6981"
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
     
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Profile picture
                      </label>
                      <input 
                        type="file" 
                        name="profilePicture"
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
                    </div>
                  </div>
                </div>
                
        
                <hr class="mt-6 border-b-1 border-blueGray-300">
        
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                  Contact Information
                </h6>
                <div class="flex flex-wrap mb-16">
                  <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Address
                      </label>
                      <input 
                        type="text" 
                        name="homeaddress"
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        City
                      </label>
                      <input 
                        type="text" 
                        name="citiy"
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Country
                      </label>
                      <input 
                        name="country"
                        type="text" 
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        location
                      </label>
                      <input 
                        type="text" 
                        name="location"
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                  </div>
                </div>
        
                <hr class="mt-6 border-b-1 border-blueGray-300">
        
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                  About Me
                </h6>
                <div class="flex flex-wrap mb-16">
                  <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        About me
                      </label>
                      <textarea 
                        type="text" 
                        name="myself"
                        required
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"></textarea>
                    </div>
                  </div>
                </div>
                
                <h6 class="text-blueGray-400 text-md mt-3 mb-12 uppercase">
                   Educational Information
                </h6>
               <div class="flex flex-wrap mb-16">
                    <div class="w-full lg:w-12/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          School
                        </label>
                        <input 
                          type="text" 
                          name="schoolname"
                          class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                      </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Completion year
                        </label>
                        <input 
                          type="date" 
                          name="completionyear"
                          class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                      </div>
                    </div>


                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          certificate
                        </label>
                        <input 
                          name="certificate"
                          type="file" 
                          required
                          class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                      </div>
                    </div>

               </div>
               
               
               
               
               {{-- EXPERICNE LEVEL --}}
               <h6 class="text-blueGray-400 text-md mt-3 mb-10  uppercase">
                    Expericne informaton
               </h6>

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Profession
                        </label>
     
                        <select name="profession" required id="language" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="English">Mechanical Enginer</option>
                            <option value="electricalEnginner">Electrical Engineer</option>
                            <option value="BuildingAndConstruction">Buinding and construction</option>
                            <option value="Tiller">Tiler</option>
                            <option value="Gas Technician">Gas Technician</option>
                            <option value="PaintingAndDecoration">Painting and Decoration</option>
                            <option value="ACtechnician">AC technician</option>
                            <option value="Carpenter">Carpentry</option>
                        </select>
                    </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Experience level
                        </label>
     
                        <select name="experince" id="language" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="entry">Entry level</option>
                            <option value="morethanone">+1 year</option>
                            <option value="morethantwo">+2 years</option>
                            <option value="fiveyears">+5 years</option>
                            <option value="seniorlevel">Senior level</option>
                            <option value="masterlevel">Master level</option>
                        </select>
                    </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Career Commence
                        </label>
                        <input 
                          type="date" 
                          required
                          name="careercommence"
                          class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                      </div>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Preferred language
                        </label>
                        <select name="language" id="language" required class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            <option value="English">English</option>
                            <option value="English">Twi</option>
                            <option value="English">Ewe</option>
                            <option value="English">Akan</option>
                        </select>
                      </div>
                    </div>
               </div>
                  <button 
                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                    type="submit"
                  >
                    Submit
                  </button>
              </form>
            </div>
          </div>
          
        </div>
</x-guest-layout>