@extends('layouts.app')


@section('showtracks')

<x-sidebar/>

    <div class="bg-white relative left-[18.9%] w-[68rem]  h-screen pt-10 px-10 flex ">
                    <div class="h-[30rem]  grid grid-cols-4 shadow-xl rounded-xl border border-gray-200">
                            <div class="  ">
                                <div class="w-[80%] h-1/3 border border-grey-200 shadow-xl rounded-2xl overflow-hidden m-auto mt-20">
                                    <img class="w-auto h-full overflow-hidden" src="/imgs/uploads/art-profile-pic/{{ $artist->profilepic}}" alt="Artist Profile Pic">
                                </div>
                                <div class="w-full">
                                    <p class="text-center font-bold text-xl">{{ $artist->fname }} {{ $artist->lname}}</p>
                                    <p class="text-center text-lg">Album</p>
                                </div>
                            </div>
                        {{-- hiwot  --}}
                            {{-- 0911605965 --}}
                    
                        <div class="relative overflow-x-auto  sm:rounded-r-2xl w-full col-span-3">
                            <table class="w-full text-sm text-left text-gray-500 :text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase  bg-gray-50 :bg-gray-700 :text-gray-400">
                                    <tr>
                                    <th scope="col" class="px-6 py-3">
                                    Album Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    
                                    </th>
                                    <th scope="col" class="px-1 py-3">
                                    
                                    </th>
                                    <th scope="col" class="px-1 py-3">
                                    
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        
                                    <span class="sr-only">Edit</span>
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($music as $music)
                                            <tr class="bg-white border-b :bg-gray-800 :border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 :text-white whitespace-nowrap">
                                                {{ $music->music_track_num }}
                                            </th>    
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 :text-white whitespace-nowrap">
                                                {{ $music->music_name}}
                                            </th>
                                            <td class="px-6 py-4">
                                                 3:00
                                            </td>
                                            <td class="px-2 py-4 ">
                                                <svg class="w-7 cursor-pointer text-gray-400 hover:text-maincolor" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                                            </td>
                                            <td class="px-2 py-4 ">
                                                <svg class="w-7 cursor-pointer hover:text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                                            </td>
                                            <td class="px-2 py-4 ">
                                                <svg class="w-7 cursor-pointer rounded-full hover:bg-maincolor hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                             <a href="#" class="font-medium text-blue-600 :text-blue-500 hover:underline"></a>
                                            </td>
                                            </tr>
                                           
                                        @endforeach
                            </table>
                        </div>
                        <div>
    </div>

@endsection