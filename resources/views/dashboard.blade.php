<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="py-12" class="hidden" id="alertMessage" data-alert-message>
        <div class="max-w-3xl mx-auto flex justify-between items-center bg-blue-500 text-white text-sm font-bold px-4 py-6 rounded-md" role="alert">
            <div class="flex justify-between items-center">
                <ion-icon name="alert-outline" class="text-2xl"></ion-icon>
                <p> Welcome to your profile page, please complete your profile to get recognized</p>
            </div>
            <ion-icon name="close-circle-outline" class="text-2xl ml-20 cursor"></ion-icon>
        </div>
    </div> --}}

    <article class="">
        <section class="">
            <section class=" py-1 bg-blueGray-50">
                <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                      <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                          My account
                        </h6>
                        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                          Settings
                        </button>
                      </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                      <form method="POST" accept="">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                          User Information
                        </h6>
                        <div class="flex flex-wrap">
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Date of birth
                              </label>
                              <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="lucky.jesse">
                            </div>
                          </div>
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Email address
                              </label>
                              <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="jesse@example.com">
                            </div>
                          </div>
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                First Name
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                            </div>
                          </div>
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Last Name
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                            </div>
                          </div>
                        </div>
                
                        <hr class="mt-6 border-b-1 border-blueGray-300">
                
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                          Contact Information
                        </h6>
                        <div class="flex flex-wrap">
                          <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Address
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                            </div>
                          </div>
                          <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                City
                              </label>
                              <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="New York">
                            </div>
                          </div>
                          <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                Country
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
                            </div>
                          </div>
                          <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                location
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="dansoman">
                            </div>
                          </div>
                        </div>
                
                        <hr class="mt-6 border-b-1 border-blueGray-300">
                
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                          About Me
                        </h6>
                        <div class="flex flex-wrap">
                          <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                About me
                              </label>
                              <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" rows="4"> A beautiful UI Kit and Admin for JavaScript &amp; Tailwind CSS. It is Freeand Open Source.</textarea>
                            </div>
                          </div>
                        </div>
                        

                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Expericne informaton
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                              <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Profession
                                </label>

                                <select name="language" id="language" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    <option value="English">Mechanical Enginer</option>
                                    <option value="English">Electrical Engineer</option>
                                    <option value="English">Buinding and construction</option>
                                    <option value="English">Tiler</option>
                                    <option value="English">Gas Technician</option>
                                    <option value="English">Painting and Decoration</option>
                                    <option value="English">AC technician</option>
                                    <option value="English">Carpentry</option>
                                </select>
                            </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                              <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Experience level
                                </label>

                                <select name="language" id="language" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    <option value="English">Entry level</option>
                                    <option value="English">+1 year</option>
                                    <option value="English">+2 years</option>
                                    <option value="English">+5 years</option>
                                    <option value="English">Senior level</option>
                                    <option value="English">Master level</option>
                                </select>
                            </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                              <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Career Commence
                                </label>
                                <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                              </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                              <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                  Preferred language
                                </label>
                                <select name="language" id="language" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    <option value="English">English</option>
                                    <option value="English">Twi</option>
                                    <option value="English">Ewe</option>
                                    <option value="English">Akan</option>
                                </select>
                              </div>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                  
                </div>
                </section>
        </section>
    </article>
</x-app-layout>
