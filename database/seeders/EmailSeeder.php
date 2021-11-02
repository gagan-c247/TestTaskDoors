<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\EmailTemplate;

class EmailSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        EmailTemplate::truncate();

        DB::table('email_template')->insert([
            'name'      => 'Activate',
            'subject'   => 'Congrates! Your account has been activated',
            'content'   => '<table cellpadding="0" cellspacing="0" style="background-color:#f7f7f7; font-family:Helvetica; padding:15px; width:100%">
                    <tbody>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#3d5ca3; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#666666; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                        <h1>Your account has been activated.</h1>

                                        <div style="background-color:#999999; height:2px; margin-bottom:20px; width:30px">&nbsp;</div>

                                        <p style="margin-left:0; margin-right:0">Hi, [first_name] [last_name],</p>

                                        <p style="margin-left:0; margin-right:0">Here are your login details</p>

                                        <p style="margin-left:0; margin-right:0"><strong>Email: </strong>[email]</p>

                                        <p style="margin-left:0; margin-right:0"><strong>Password: </strong>[password]</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'variables' => '["first_name", "last_name", "email", "password"]'
        ]);

        DB::table('email_template')->insert([
            'name'      => 'User Registration',
            'subject'   => 'You are registered successfully',
            'content'   => '<table cellpadding="0" cellspacing="0" style="background-color:#f7f7f7; font-family:Helvetica; padding:15px; width:100%">
                    <tbody>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#3d5ca3; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#666666; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                        <h1>Your have registered successfully on Resin Trader.</h1>

                                        <div style="background-color:#999999; height:2px; margin-bottom:20px; width:30px">&nbsp;</div>

                                        <p style="margin-left:0; margin-right:0">Hi, [first_name] [last_name],</p>

                                        <p style="margin-left:0; margin-right:0">Currently, Your account is deactivate.</p>

                                        <p style="margin-left:0; margin-right:0">Our Administration team will review your profile and get back to you soon.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'variables' => '["first_name", "last_name"]'
        ]);

        DB::table('email_template')->insert([
            'name'      => 'Deactiavte',
            'subject'   => 'Oops! Your account has been deactivated',
            'content'   => '<table cellpadding="0" cellspacing="0" style="background-color:#f7f7f7; font-family:Helvetica; padding:15px; width:100%">
                    <tbody>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#3d5ca3; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#666666; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                        <h1>Your account has been deactivated.</h1>

                                        <div style="background-color:#999999; height:2px; margin-bottom:20px; width:30px">&nbsp;</div>

                                        <p style="margin-left:0; margin-right:0">Hi, [first_name] [last_name],</p>

                                        <p style="margin-left:0; margin-right:0">Our Administration team will review your profile and get back to you soon.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'variables' => '["first_name", "last_name"]'
        ]);

        DB::table('email_template')->insert([
            'name'      => 'User Change Password',
            'subject'   => 'Your password changed successfully',
            'content'   => '<table cellpadding="0" cellspacing="0" style="background-color:#f7f7f7; font-family:Helvetica; padding:15px; width:100%">
                    <tbody>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#3d5ca3; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#666666; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                        <h1>Your password has been changed successfully.</h1>

                                        <div style="background-color:#999999; height:2px; margin-bottom:20px; width:30px">&nbsp;</div>

                                        <p style="margin-left:0; margin-right:0">Hi, [first_name] [last_name],</p>

                                        <p style="margin-left:0; margin-right:0">Now, You will login with new password after logout your profile.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'variables' => '["first_name", "last_name"]'
        ]);

        DB::table('email_template')->insert([
            'name'      => 'Product Buyer Template',
            'subject'   => 'Product purchased successfully',
            'content'   => '<table cellpadding="0" cellspacing="0" style="background-color:#f7f7f7; font-family:Helvetica; padding:15px; width:100%">
                    <tbody>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#3d5ca3; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#666666; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                        <h1>Product purchased successfully.</h1>

                                        <div style="background-color:#999999; height:2px; margin-bottom:20px; width:30px">&nbsp;</div>

                                        <p style="margin-left:0; margin-right:0">Hi, [first_name] [last_name],</p>

                                        <p style="margin-left:0; margin-right:0">Product purchased successfully.</p>

                                        <p style="margin-left:0; margin-right:0">Product Number: [product_number]</p>

                                        <p style="margin-left:0; margin-right:0">Product Title: [title]</p>

                                        <p style="margin-left:0; margin-right:0">Product Price: [price]</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'variables' => '["first_name", "last_name", "product_number", "title", "price"]'
        ]);

        DB::table('email_template')->insert([
            'name'      => 'Product Seller Template',
            'subject'   => 'Product soldout successfully',
            'content'   => '<table cellpadding="0" cellspacing="0" style="background-color:#f7f7f7; font-family:Helvetica; padding:15px; width:100%">
                    <tbody>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#3d5ca3; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#666666; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                        <h1>Product soldout successfully.</h1>

                                        <div style="background-color:#999999; height:2px; margin-bottom:20px; width:30px">&nbsp;</div>

                                        <p style="margin-left:0; margin-right:0">Hi, [first_name] [last_name],</p>

                                        <p style="margin-left:0; margin-right:0">Product soldout successfully.</p>

                                        <p style="margin-left:0; margin-right:0">Product Number: [product_number]</p>

                                        <p style="margin-left:0; margin-right:0">Product Title: [title]</p>

                                        <p style="margin-left:0; margin-right:0">Product Price: [price]</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'variables' => '["first_name", "last_name", "product_number", "title", "price"]'
        ]);

        DB::table('email_template')->insert([
            'name'      => 'Contact Us Template',
            'subject'   => 'Thanks for contacting us',
            'content'   => '<table cellpadding="0" cellspacing="0" style="background-color:#f7f7f7; font-family:Helvetica; padding:15px; width:100%">
                    <tbody>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#3d5ca3; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <table cellpadding="0" cellspacing="0" style="background-color:#ffffff; color:#666666; font-family:Helvetica; margin-top:16px; margin:0 auto; max-width:600px; padding:20px 40px 40px; width:100%">
                                <tbody>
                                    <tr>
                                        <td>
                                        <h1>Thanks for contacting us.</h1>

                                        <div style="background-color:#999999; height:2px; margin-bottom:20px; width:30px">&nbsp;</div>

                                        <p style="margin-left:0; margin-right:0">Hi, [name],</p>

                                        <p style="margin-left:0; margin-right:0">Thanks for contacting us, our team revert you soon.</p>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>',
            'variables' => '["name"]'
        ]);
    }
}
