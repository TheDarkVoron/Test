# Test
Имеется 2 ошибки, которые не могу исправить:
1. При попытке вывести список через


        {% for Cour_item in Cour %}
            <li>{{ Cour_item.Name}}<a href="{{path('course_home_update', {'id': Cour_item.id}) }}"
            class="btn-link">
            Редактировать</a>

    
    появляется ошибка. course/index.html.twig
    
2. После создания курса появляется ошибка на странице заявок. Видимо не удалось правильно связать 2 сущности EApplic и ECourse.
(Пока пытался поправить это, сломал еще что-то, после чего курсы тоже не создаются:
этослучилось когда в EApplic добавил

    /**
     * @ORM\ManyToOne(targetEntity=ECourse::class, inversedBy="NameCourse")
     */
    private $CourseName;
)

