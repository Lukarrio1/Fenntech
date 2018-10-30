<template>
        <v-toolbar>
             <!-- <v-img src="{{ url('storage/logo.png') }}"> -->
          <v-spacer></v-spacer>
          <v-toolbar-items>
            <v-btn flat href="{{ url('contact/') }}">Inbox</v-btn>
            <v-btn flat href="{{ url('Viewall/All_job') }}">Jobs</v-btn>
            <v-btn flat  href="{{ url('Viewall/All_team') }}">Team Members</v-btn>
            <v-btn flat href="/All_testimonials">Testimonials</v-btn>
            <v-btn flat href="{{ url('Viewall/All_slide') }}">Carousel slides</v-btn>
            <v-btn flat href="{{ url('portfolio/create') }}">Add Portfolio</v-btn>
            <div>@yield('nav-dy')</div>
            <v-btn flat  href="{{ route('logout') }}"
              onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"> {{ __('Logout') }}</v-btn>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
          </v-toolbar-items>
        </v-toolbar>
      </template>