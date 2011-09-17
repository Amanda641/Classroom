<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Classroombookings. Hassle-free resource booking for schools. <http://classroombookings.com/>
 * Copyright (C) 2006-2011 Craig A Rodway <craig.rodway@gmail.com>
 *
 * This file is part of Classroombookings.
 * Classroombookings is licensed under the Affero GNU GPLv3 license.
 * Please see license-classroombookings.txt for the full license text.
 */

class Menu_model extends CI_Model
{
	
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	/**
	 * Main navigation
	 */
	function main()
	{
		$subnav = array();
		$subnav[] = array('dashboard', lang('DASHBOARD'), 'dashboard', 'dashboard');
		$subnav[] = array('bookings', lang('BOOKINGS'), 'bookings', 'bookings');
		$subnav[] = array('configure', lang('CONFIGURE'), 'configure', 'configure');
		$subnav[] = array('reports', lang('REPORTS'), 'reports', 'reports');
		$subnav[] = array('reports', 'Event Log', 'reports', 'event-log');
		return $subnav;
	}
	
	
	
	/**
	 * Configuration navigation
	 */
	function configure()
	{
		$subnav = array();
		$subnav[] = array('configure/settings', lang('GENERAL_SETTINGS'), 'configure', 'configure-settings');
		$subnav[] = array('authentication', lang('AUTHENTICATION'), 'configure', 'configure-authentication');
		$subnav[] = array('users', lang('USERS'), 'users', 'configure-users');
		$subnav[] = array('groups', lang('USER_GROUPS'), 'groups', 'configure-groups');
		$subnav[] = array('permissions', lang('GROUP_PERMISSIONS'), 'permissions', 'configure-permissions');
		$subnav[] = array('departments', lang('DEPARTMENTS'), 'departments', 'configure-departments');
		$subnav[] = array('rooms/manage', lang('ROOMS'), 'rooms', 'configure-rooms');
		$subnav[] = array('academic/years', lang('ACADEMIC_YEARS'), 'years', 'configure-years');
		$subnav[] = array('academic/terms', lang('TERM_DATES'), 'terms', 'configure-terms');
		$subnav[] = array('academic/weeks', lang('TIMETABLE_WEEKS'), 'weeks', 'configure-weeks');
		$subnav[] = array('academic/holidays', lang('HOLIDAYS'), 'holidays', 'configure-holidays');
		$subnav[] = array('academic/periods', lang('PERIODS'), 'periods', 'configure-periods');
		return $subnav;
	}
	
	
	
	
	/**
	 * Configure / Users
	 */
	function users()
	{
		$subnav = array();
		$subnav[] = array('users/add', 'Add new user', 'users.add', 'add');
		$subnav[] = array('users/import', 'Bulk import users', 'users.import', 'upload');
		return $subnav;
	}
	
	
	
	
}


/* End of file: app/models/menu_model.php */