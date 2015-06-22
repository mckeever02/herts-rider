        <nav class="arrow-nav nav-growpop">
          <a class="prev <? echo $page[''.$prev.'']['id'];?> <? echo $page[''.$prev.'']['type'];?>" href="../../<? echo $page[''.$prev.'']['type'];?>/<? echo $page[''.$prev.'']['id'];?>">
             <span class="icon-wrap">
              <svg class="icon" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 9.691 9.809">
                <g>
                  <path d="M9.691,5.373H1.799l3.773,3.773L4.904,9.809L0,4.904L4.904,0l0.668,0.662L1.799,4.436h7.893V5.373z"/>
                </g>
              </svg>
            </span>
            <div>
              <p class="subheading">Previous article</p>
              <h4><? echo $page[''.$prev.'']['title'];?></h4>
              <img class="article-preview-thumbnail" src="../../<? echo $page[''.$prev.'']['type'];?>/<? echo $page[''.$prev.'']['id'];?>/images/thumbnail.jpg" alt="<? echo  $page[''.$prev.'']['title'];?>">
            </div>
          </a>

          <a class="next <? echo $page[''.$next.'']['id'];?> <? echo $page[''.$next.'']['type'];?>" href="../../<? echo $page[''.$next.'']['type'];?>/<? echo $page[''.$next.'']['id'];?>">
            <span class="icon-wrap">
              <svg class="icon rotate-right" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 9.691 9.809">
                <g>
                  <path d="M9.691,5.373H1.799l3.773,3.773L4.904,9.809L0,4.904L4.904,0l0.668,0.662L1.799,4.436h7.893V5.373z"/>
                </g>
              </svg>
            </span>
            <div>
              <p class="subheading">Next article</p>
              <h4><? echo $page[''.$next.'']['title'];?></h4>
              <img class="article-preview-thumbnail" src="../../<? echo $page[''.$next.'']['type'];?>/<? echo $page[''.$next.'']['id'];?>/images/thumbnail.jpg" alt="<? echo  $page[''.$next.'']['title'];?>">
            </div>
          </a>

        </nav>