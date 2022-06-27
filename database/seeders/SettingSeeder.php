<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'setting_name' => 'company',
            'attribute_name' => ['description' => 'Согласно действующему законодательству Украины, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.
        			<br><br>
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			Ни при каких обстоятельствах Администрация Сайта не будет нести ответственность ни перед какой стороной за любой прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется ссылка с нашего сайта, возникновение зависимости, снижения производительности, увольнения или прерывания трудовой активности, а также отчисления из учебных заведений, любую упущенную выгоду, прекращение хозяйственной деятельности, потерю программ или данных в наших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования сайта, Содержимого или любого связанного интернет-ресурса, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в ​​передаче, компьютерным вирусом или системным сбоем, даже если администрация будет напрямую сообщено о возможности такого ущерба.
        			<br><br>
        			Пользователь соглашается с тем, что все возможные споры будут решаться согласно норм украинского права.
        			Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к нему вне использования Сайта, поскольку он не предоставляет возмездных услуг.
        			Используя данный Сайт, Вы соглашаетесь с «Отказом от ответственности» и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.'],
        ]);

        Setting::create([
            'setting_name' => 'email',
            'attribute_name' => ['email' => 'orders@birel.io']
        ]);
        Setting::create([
            'setting_name' => 'social',
            'attribute_name' => [
                'twitter' => 'https://twitter.com',
                'linkedin' => 'https://www.linkedin.com'
            ]
        ]);
    }
}
